<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id_settings');
            $table->string('nama_bank', 32);
            $table->string('no_rek', 32);
            $table->string('pemilik_rek', 64);
            $table->string('cp_smp', 16);
            $table->string('cp_sma', 16);
            $table->string('cp_smk', 16);
            $table->string('alamat_sekolah', 128);
            $table->string('telp_sekolah', 16);
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('settings')->insert(
            [
                'nama_bank' => 'BNI Syariah',
                'no_rek' => '1050920157',
                'pemilik_rek' => 'Yayasan Islam Al Fidaa',
                'cp_smp' => '81318375066',
                'cp_sma' => '81314632201',
                'cp_smk' => '81314632201',
                'alamat_sekolah' => 'Jl. Damai No. 8, Setiamekar Kec. Tambun Sel, Bekasi',
                'telp_sekolah' => '(021) 88350446',
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
        Schema::dropIfExists('settings');
    }
}
