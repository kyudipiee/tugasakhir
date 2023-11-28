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
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard-admin');
        }

        return redirect('/login');
    }

    public function registerakun(){
        return view('registerakun');
    }

    public function registerakunuser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }
}
