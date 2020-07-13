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
            $table->string('id_invoice');
            $table->string('nama_siswa');
            $table->string('role_siswa');
            $table->string('note');
            $table->date('date');
            $table->string('from_rek');
            $table->string('from_name');
            $table->string('from_bank_name');
            $table->string('verified_by');
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
