<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function user_login(Request $request){
        $request->validate([
            'email'=>'required|email:rfc,dns',
            'password'=>'required|min 6|max 18|string'
        ]);
    }
}
