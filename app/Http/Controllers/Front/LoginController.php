<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('front.login');
    }


    public function loginIn(LoginRequest $request){

        //Request data from form
        $credentials = $request->only('email','password');

        //Check compatibility
        If(Auth::attempt($credentials)) {
            if(Auth::user()->role_id == 1){
                //Session message
                session()->flash('msg','You have successfully login');
                //Redirect to
                return redirect('/admin');
            }else{
                //Session message
                session()->flash('msg','You have successfully login');
                //Redirect to
                return redirect('/');
            }

        }else{
            session()->flash('message','Wrong login details. Please try again.');
            return redirect()->back();

        }


    }


    public function register(){
        return view('front.register');
    }

    public function registerIn(RegisterRequest $request){

        //Create new user
        $user = new User();
        //Save data to database
        $user = User::create([
            'name'=>$request->name,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' =>bcrypt($request->password) ,
            'role_id' => $request->role_id,
        ]);
        //Login user
        Auth::login($user);
        //Session message
        session()->flash('msg','You have successfully register');
        //Redirect to
        return redirect('/');
    }


    public function logout(){
        Auth::logout();
        //Session message
        session()->flash('msg','You have successfully logout');
        //Redirect to
        return redirect('/');
    }
}
