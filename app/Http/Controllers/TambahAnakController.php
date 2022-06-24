<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahAnakController extends Controller
{
    public function daftar(Request $request)
    {
        if($request->has('cari')){
            $data_anak = \App\tambah_anak::where('nama_anak', 'LIKE','%'.$request->cari.'%')->get();
        } else{
            $data_anak = \App\tambah_anak::all();
        }
        
        return view('pendaftaran.tambah_anak',['data_anak' => $data_anak]);
    }
    public function tambah(Request $request)
    {
        \App\tambah_anak::create($request->all());
        return redirect ('/daftar')->with('Sukses', 'Data Anak Di Input');
    }
    public function edit($id)
    {
        $data_anak = \App\tambah_anak::find($id);
        return view('pendaftaran/edit' , ['data_anak' => $data_anak]);
    }
    public function update(Request $request, $id)
    {
        $data_anak = \App\tambah_anak::find($id);
        $data_anak->update($request->all());
        return redirect('/daftar')->with('Sukses', 'Data Anak Berhasil Di update');
    }
    public function hapus($id)
    {
        $data_anak = \App\tambah_anak::find($id);
        $data_anak->delete($data_anak);
        return redirect('/daftar')->with('Sukses', 'Data Anak Berhasil Di hapus');
    }

}

