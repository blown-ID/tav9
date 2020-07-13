<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_siswa', function (Blueprint $table) {
            $table->integer('id_siswa')->primary()->unsigned()->nullable();
            $table->integer('id_user')->unsigned()->nullable();
            $table->integer('id_ortu')->unsigned()->nullable();
            $table->string('no_daftar');
            $table->string('nisn');
            $table->string('nik');
            $table->string('jenis_kel');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat_rumah');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('asal_sekolah');
            $table->string('alamat_sekolah');
            $table->string('bahasa_rumah');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('golongan_darah');
            $table->string('jurusan');
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
        Schema::dropIfExists('detail_siswa');
    }
}
