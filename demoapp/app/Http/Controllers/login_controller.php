<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class login_controller extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function user_login(Request $request){
        // $request->validate([
        //     'email'=>'required|email:rfc,dns|max:64',
        //     'password'=>['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
        // ]);
        // dd($request->all());
        $data=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
            return redirect('/')->with("success","Login Successfully...");
        }
        return back()->with("error","Invalid Username or Password...");
    }
}
