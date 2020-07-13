<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user')->unsigned();
            $table->string('nama', 64);
            $table->string('email', 64)->unique();
            $table->string('no_telp', 20);
            $table->string('password', 128);
            $table->string('photo', 64);
            $table->tinyInteger('bayar_pendaftaran', 1)->unsigned()->default(0);
            $table->tinyInteger('sudah_cetak', 1)->unsigned()->default(0);
            $table->tinyInteger('is_lulus', 1)->unsigned()->default(0);
            $table->tinyInteger('is_completed', 1)->unsigned()->default(0);
            $table->bigInteger('role_id')->unsigned();
            $table->integer('dgk', 2)->unsigned();
            // $table->foreign('dgk')->references('id_gelombang')->on('gelombang')->onDelete('restrict');
            // $table->string('jurusan')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $this->postCreate('SMP', 'SMA', 'SMK', 'Admin SMP', 'Admin SMA', 'Admin SMK', 'Admin Keuangan', 'Super Admin');
        // $this->makeSuperadmin();
    }

    private function postCreate(string ...$roles)
    {
        foreach ($roles as $role) {
            $model = new App\Role;
            $model->setAttribute('name', $role);
            $model->setAttribute('guard_name', 'web');
            $model->save();
        }
    }
    private function makeSuperadmin()
    {
        $model = new App\User;
        $model->setAttribute('nama', 'Superadmin');
        $model->setAttribute('email', 'superadmin');
        $model->setAttribute('no_telp', '123456');
        $model->setAttribute('password', '$2y$10$8snnoMBDNK7omXdHJIAIJehsgH07/.MMiIF5CUf07fChZ9R2G2ya6');
        $model->setAttribute('photo', 'default.jpg');
        $model->setAttribute('bayar_pendaftaran', 1);
        $model->setAttribute('sudah_cetak', 0);
        $model->setAttribute('is_lulus', 0);
        $model->setAttribute('is_completed', 0);
        $model->setAttribute('role_id', 8);
        $model->setAttribute('dgk', 0);
        $model->save();
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
