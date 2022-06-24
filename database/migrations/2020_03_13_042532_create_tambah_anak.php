<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambahanak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('anak_ke');
            $table->date('tgl_lahir');
            $table->string('kelamin');
            $table->integer('no_kk');
            $table->integer('nik_anak')->unique();
            $table->string('nama_anak');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->integer('no_hp');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambahanak');
    }
}
