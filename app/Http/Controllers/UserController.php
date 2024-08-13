<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function Login(Request $request){
        $credenciales = $request->only('email', 'password');
        if(Auth::attempt($credenciales))
            return redirect("/");
        return redirect("/login")->with("loginInvalido",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/");
    }
}
