<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\StoreUpdateRequest;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function index(){
        $stores = Store::paginate(3);
        return view('admin.store.index',compact('stores'));
    }

    public function create(){
        $store = new Store();
        $products = Product::all();
        return view('admin.store.create',compact('store','products'));
    }

    public function store(StoreRequest $request){

        //Insert Products
        if($request->has('product_id')){

            //Must convert array to string for product
            $arrayToString = implode(',', $request->input('product_id'));

            DB::table('stores')->insert([
                'product_id' => $arrayToString,
                'name'=>$request->name,
                'code'=>$request->code,
                'base_url' => $request->base_url,
                'description'=>$request->description,
            ]);
        }else{
            //Without Product
            DB::table('stores')->insert([
                'name'=>$request->name,
                'code'=>$request->code,
                'base_url' => $request->base_url,
                'description'=>$request->description,
            ]);

        }


        //Session message
        session()->flash('msg','Store has been created successfully');
        //Redirect to
        return redirect('/admin/store/index');

    }
    public function edit($id){
        $store = Store::find($id);
        $products = Product::all();


        return view('admin.store.edit',compact('store','products'));

    }

    public function update(Request $request, $id){
        //Find a store
        $store = Store::find($id);

        $this->validate($request,[
            'name'=>'max:50',
            'code'=>'max:30|unique:stores,code,'.$store->id,
            'base_url' => 'max:30|unique:stores,base_url,'.$store->id,
            'description'=>'max:2000',

        ]);

        //Update data to database
        $store->update([
            'name'=>$request->name,
            'code'=>$request->code,
            'base-url' => $request->base_url,
            'description'=>$request->description,

        ]);
        //Session message
        session()->flash('msg','Store has been updated successfully');
        //Redirect to
        return redirect('/admin/store/index');

    }

    public function show($base_url){
        $store = Store::where('base_url',$base_url)->first();
//        $store = Store::find($id);
        return view('admin.store.show',compact('store'));
    }




    public function delete($id){
        //Find a store
        $store = Store::find($id);
        //Delete store
        $store->delete();
        //Session message
        session()->flash('delete','Store has been deleted successfully');
        //Redirect to
        return redirect()->back();
    }
}
