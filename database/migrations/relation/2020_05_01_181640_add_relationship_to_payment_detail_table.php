<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToPaymentDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_detail', function (Blueprint $table) {
            $table->foreign('id_payment')->references('id_payment')->on('payment')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('id_item')->references('id_item')->on('item')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_detail', function (Blueprint $table) {
            //
        });
    }
}
