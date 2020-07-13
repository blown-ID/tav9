<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ortu', function (Blueprint $table) {
            $table->integer('id_ortu')->primary()->unsigned();
            $table->string('nama_ayah', 32);
            $table->string('nama_ibu', 32);
            $table->string('alamat_ayah', 128);
            $table->string('alamat_ibu', 128);
            $table->string('telp_ayah', 32);
            $table->string('telp_ibu', 32);
            $table->string('pendidikan_ayah', 32);
            $table->string('pendidikan_ibu', 32);
            $table->string('penghasilan_ayah', 32);
            $table->string('penghasilan_ibu', 32);
            $table->string('pekerjaan_ayah', 32);
            $table->string('pekerjaan_ibu', 32);
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
        Schema::dropIfExists('detail_ortu');
    }
}
