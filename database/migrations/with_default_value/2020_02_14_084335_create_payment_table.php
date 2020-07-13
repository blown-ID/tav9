<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id_payment');
            $table->integer('id_siswa')->unsigned();
            $table->string('id_invoice', 32);
            $table->string('nama_siswa', 64);
            $table->string('role_siswa', 64);
            $table->string('note', 64);
            $table->date('date', 64);
            $table->string('from_rek', 64);
            $table->string('from_name', 64);
            $table->string('from_bank_name', 64);
            $table->string('verified_by', 64);
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
        Schema::dropIfExists('payment');
    }
}
