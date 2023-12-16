<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function indexstudent()
    {
        return view('front.indexstudent');
    }

    public function loginproses(Request $request)
    {
        $credentials = $request->only('password', 'email');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Check if the user's status is 0
            if (Auth::User()->role == '1') {
                return redirect('/indexstudent');
            } elseif (Auth::User()->role == '2') {
                return redirect('/dashboard-admin');
            }
        }

        // If authentication fails or the status is not 0, redirect back to login
        return redirect('/login')->with('alert', 'email atau password salah');
    }


    public function registerakun()
    {
        return view('registerakun');
    }

    public function registerakunuser(Request $request)
    {
        // mengambil data User, User dari Model
        // dipassword harus pake bcrypt supaya bisa login
        // remember_token harus pake str untuk merubah pa

        // validasi
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return \redirect('login');
    }
}
