<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
   public function register(Request $request){
       
        return view ('register.register')->with('Sukses', 'Data Anak Di Input');
    }
}
