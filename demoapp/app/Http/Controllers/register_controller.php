<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class register_controller extends Controller
{
    public function register()
    {
        return view('register.register');
    }

    public function user_register(Request $request){
        $request->validate([
            'name'=>'required|alpha:ascii|min:2|max:32',
            'email'=>'required|email:rfc,dns|max:64|unique:users,email',
            'mobile'=>'required|digits:10',
            'new_password'=>['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirm_password'=>['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(),'same:new_password'],
        ]);
        // dd($request->all());
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->password=Hash::make($request->new_password);
        $user->save();
        return back()->with("success","Registerd Successfully...");
        
    }
}
