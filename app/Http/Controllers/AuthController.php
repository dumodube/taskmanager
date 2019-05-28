<?php

namespace TodoMaster\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use TodoMaster\User;

class AuthController extends Controller
{
    public function getSignup(){
        return view('auth.signup');
    }

    public function postSignup(Request $request){

        $this->validate($request,[
            'email'=> 'required|unique:users|email|max:255',
            'username'=> 'required|unique:users|alpha_dash|max:20',
            'password'=> 'required|max:10',
            'name'=> 'required',
        ]);

        $user = new User;
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->name =  $request->input('name');
        $user->save();
        Auth::login($user);
        
        return redirect()->route('home')->with('info','Your account has been created');
    }
// This is the user login page

    public function getSignin(){
        return view('auth.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only(['username','password']),$request->has('remember'))){
            return redirect()->back()->with('error','Could not sign you in with those details');
        }

        return redirect()->route('home')->with('info','You are now signed in');
    }



    public function getSignout(){
        Auth::logout();

        return redirect()->route('home')->with('info','You have logged out login to continue using the systen');
    }
}
