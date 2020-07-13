<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelombangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelombang', function (Blueprint $table) {
            $table->increments('id_gelombang');
            $table->string('nama_gelombang');
            $table->date('tgl_ujian');
            $table->integer('active');
            $table->integer('nilai_lulus');
            $table->timestamps();
        });

        DB::table('gelombang')->insert(
            [
                'nama_gelombang' => '1',
                'tgl_ujian' => date('Y-m-d'),
                'active' => 1,
                'nilai_lulus' => 85,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gelombang');
    }
}
