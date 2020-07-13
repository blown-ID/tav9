<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenjang', function (Blueprint $table) {
            $table->increments('id_jenjang');
            $table->string('nama_jenjang');
            $table->timestamps();
        });

        $this->CreateJenjang('SMP', 'SMA', 'SMK');
    }

    private function CreateJenjang(string ...$roles)
    {
        foreach ($roles as $role) {
            $model = new App\Jenjang;
            $model->setAttribute('nama_jenjang', $role);
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
        Schema::dropIfExists('jenjang');
    }
}
