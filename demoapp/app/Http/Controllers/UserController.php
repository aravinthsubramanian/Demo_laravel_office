<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //Login..................................................................................
    public function login()
    {
        return view('user.userlogin');
    }

    public function user_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return view('user.userhome')->with("success", "Login Successfully...");
        }
        return back()->with("error", "Invalid Username or Password...");
    }


    // Register......................................................................................
    public function register()
    {
        return view('user.userregistration');
    }

    public function user_register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:32|regex:/^[a-zA-Z .]+$/',
            'email' => 'required|email:rfc,dns|max:64|unique:users,email',
            'mobile' => 'required|digits:10',
            'new_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirm_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:new_password'],
        ]);
        // dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->new_password);
        $user->save();
        return back()->with("success", "Registerd Successfully...");
    }

    //Logout...........................................................................
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return view('user.userlogin');
    }
}
