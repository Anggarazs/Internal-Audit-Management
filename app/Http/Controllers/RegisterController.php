<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auths.register');
    }

    public function postRegister(Request $request){
       $validateData = $request->validate([
           "username" => 'required|max:255|unique:users',
           "departement" => 'required|max:225',
           "password" => 'required|min:6|max:255'
       ]);
       $validateData['password'] = bcrypt($validateData['password']);
       User::create($validateData);

       return redirect('/login');
    }
}
