<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class register_controller extends Controller
{
    public function register()
    {
        return view('register.register');
    }

    public function user_register(Request $request){
        $request->validate([
            'name'=>'required|alpha:ascii|min:2|max:32',
            'email'=>'required|email:rfc,dns|max:64',
            'mobile'=>'required|min_digits:10|max_digits:10',
            'new_password'=>'required|min:6|max:18',
            'confirm_password'=>'required|min:6|max:18',
        ]);
        dd($request->all());
        
    }
}
