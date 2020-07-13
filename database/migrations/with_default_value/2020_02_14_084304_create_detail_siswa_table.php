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
            $table->string('no_daftar', 32);
            $table->string('nisn', 32);
            $table->string('nik', 16);
            $table->string('jenis_kel', 1);
            $table->string('tempat_lahir', 32);
            $table->date('tgl_lahir', 32);
            $table->string('alamat_rumah', 128);
            $table->string('agama', 16);
            $table->string('kewarganegaraan', 16);
            $table->string('asal_sekolah', 32);
            $table->string('alamat_sekolah', 128);
            $table->string('bahasa_rumah', 16);
            $table->string('anak_ke', 2);
            $table->string('jumlah_saudara', 2);
            $table->string('golongan_darah', 5);
            $table->string('jurusan', 32);
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
