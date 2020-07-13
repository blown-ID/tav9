<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->integer('id_jenjang')->unsigned();
            $table->string('nama_jurusan');
            $table->timestamps();
        });
        $this->createData();
    }

    private function createData()
    {
        $model = new App\Jurusan;
        $model->setAttribute('id_jenjang', 2);
        $model->setAttribute('nama_jurusan', 'SMA');
        $model->save();
        $model = new App\Jurusan;
        $model->setAttribute('id_jenjang', 2);
        $model->setAttribute('nama_jurusan', 'SMK');
        $model->save();

        $model = new App\Jurusan;
        $model->setAttribute('id_jenjang', 3);
        $model->setAttribute('nama_jurusan', 'Multimedia');
        $model->save();
        $model = new App\Jurusan;
        $model->setAttribute('id_jenjang', 3);
        $model->setAttribute('nama_jurusan', 'Tata Boga');
        $model->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
}
