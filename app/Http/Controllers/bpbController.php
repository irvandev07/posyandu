<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bpbController extends Controller
{
    public function daftar(Request $request)
    {
        if($request->has('cari')){
            $data_bpb = \App\bpb::where('nama_anak', 'LIKE','%'.$request->cari.'%')->get();
        } else{
            $data_bpb = \App\bpb::all();
        }
}
