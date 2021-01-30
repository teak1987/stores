<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(3);
        return view('admin.product.index',compact('products'));
    }

    public function create(){
        $product = new Product();
        return view('admin.product.create',compact('product'));
    }

    public function store(ProductRequest $request){
        $product = new Product();


        //Check for slug
        if(!$request->has('slug')){
            //Save data to database
            $product->create([
                'name'=>$request->name,
                'sku'=>$request->sku,
                'description'=>$request->description,
                'price'=>$request->price,
                'slug' =>  rand(),

            ]);
        }else{
            //Save data to database
            $product->create([
                'name'=>$request->name,
                'sku'=>$request->sku,
                'description'=>$request->description,
                'price'=>$request->price,
                'slug' => $request->slug,

            ]);

        }

        //Session message
        session()->flash('msg','Product has been created successfully');
        //Redirect to
        return redirect('/admin/product/index');

    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        //Find a product
        $product = Product::findOrFail($id);

        $this->validate($request,[
            'name'=>'max:50',
            'sku'=>'max:30|unique:products,sku,'.$product->id,
            'description'=>'max:2000',
            'price'=>'numeric|min:1',
            'slug'=>'unique:products,slug,'.$product->id,


        ]);



        //Check for slug
        if($request->has('slug')){
            //Save data to database
            $product->update([
                'name'=>$request->name,
                'sku'=>$request->sku,
                'description'=>$request->description,
                'price'=>$request->price,
                'slug' =>  $request->slug,

            ]);
        }else{
            //Save data to database
            $product->update([
                'name'=>$request->name,
                'sku'=>$request->sku,
                'description'=>$request->description,
                'price'=>$request->price,
                'slug' => rand(),

            ]);

        }

        //Session message
        session()->flash('msg','Product has been updated successfully');
        //Redirect to
        return redirect('/admin/product/index');

    }


    public function show($slug){;
        $product = Product::where('slug',$slug)->first();
        return view('admin.product.show',compact('product'));
    }


    public function delete($id){
        //Find a product
        $product = Product::find($id);
        //Delete product
        $product->delete();
        //Session message
        session()->flash('delete','Product has been deleted successfully');
        //Redirect to
        return redirect()->back();

    }
}
