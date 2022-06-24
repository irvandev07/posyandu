<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view ('auths.login');
    }

    
    public function postloginpost(Request $request)
    {
    	if (Auth::attempt($request->only('username', 'password'))) {
    		return redirect('/dashboard');
    	}
    	else
    	{
    		return redirect('/login')->with('alert','Password atau Email Salah !');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
