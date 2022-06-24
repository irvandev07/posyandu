<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambah_anak extends Model
{
    protected $table = 'tambahanak';
    protected $fillable = ['anak_ke', 'tgl_lahir', 'kelamin', 'no_kk', 'nik_anak', 'nama_anak', 'nama_ayah', 'nama_ibu', 'no_hp', 'alamat', 'update_at', 'created_at'];
}

