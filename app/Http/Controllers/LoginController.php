<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('auths.login');
    }

    public function postLogin(Request $request){
        $credentials = $request->validate([
            "username" => 'required',
            "password" => 'required'
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError','Gagal Login');
        dd('Login berhasil');
    }
}
