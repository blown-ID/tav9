<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id_item');
            $table->integer('id_jenjang')->unsigned();
            $table->double('formulir');
            $table->double('sarana');
            $table->double('spp');
            $table->double('pomg');
            $table->double('buku');
            $table->double('seragam_l');
            $table->double('seragam_p');
            $table->double('kesehatan');
            $table->double('program');
            $table->timestamps();
            // $table->foreign('id_jenjang')->references('id_jenjang')->on('jenjang')->onDelete('cascade');
        });
        $this->CreateItem('1', '2', '3');
    }

    private function CreateItem(string ...$items)
    {
        foreach ($items as $item) {
            $model = new App\Item;
            $model->setAttribute('id_jenjang', $item);
            $model->setAttribute('formulir', 100000);
            $model->setAttribute('sarana', 100000);
            $model->setAttribute('spp', 100000);
            $model->setAttribute('pomg', 100000);
            $model->setAttribute('buku', 100000);
            $model->setAttribute('seragam_l', 100000);
            $model->setAttribute('seragam_p', 100000);
            $model->setAttribute('kesehatan', 100000);
            $model->setAttribute('program', 100000);
            $model->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
