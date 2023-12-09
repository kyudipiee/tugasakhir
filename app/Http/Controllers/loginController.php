<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view ('login');
    }

    public function loginproses(Request $request){
        // jika Auth (authentication bawaan dari laravel) merequest email dan pw , kalo benar dia akan return redirect ke akun dash students/admin
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard-admin');
        }
        // kalo salah akan kembali ke halaman login
        return redirect('/login');
    }

    public function registerakun(){
        return view('registerakun');
    }

    public function registerakunuser(Request $request){
    // mengambil data User, User dari Model
    // dipassword harus pake bcrypt supaya bisa login
    // remember_token harus pake str untuk merubah pa
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return \redirect('login');
    }



}
