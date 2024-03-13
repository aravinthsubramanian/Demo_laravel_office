<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    // Admin login............................................................................
    public function admin()
    {
        return view('admin.adminlogin');
    }

    public function admin_login(Request $request)
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
        $users = User::all();

        if (Auth::guard('admin')->attempt($data)) {
            return view('admin.adminhome', compact('users'))->with("success", "Login Successfully...");
        }
        return back()->with("error", "Invalid Username or Password...");
    }


    // Admin Register................................................................................
    public function admin_registration()
    {
        return view('admin.adminregistration');
    }

    public function admin_register(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha:ascii|min:2|max:32',
            'email' => 'required|email:rfc,dns|max:64|unique:users,email',
            'mobile' => 'required|digits:10',
            'new_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirm_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:new_password'],
        ]);
        // dd($request->all());
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobile = $request->mobile;
        $admin->password = Hash::make($request->new_password);
        $admin->save();
        return back()->with("success", "Registerd Successfully...");
    }
}
