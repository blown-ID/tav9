<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 192; $i++) {
            DB::table('users')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'no_telp' => $faker->phoneNumber,
                'password' => '$2y$10$OYqIDYf319Thrt5MgQYs4..cRpcIVHnajp6E74FDZS6E2vMkI3.xq',
                'photo' => "default.jpg",
                'bayar_pendaftaran' => $faker->numberBetween(0, 1),
                'sudah_cetak' => $faker->numberBetween(0, 1),
                'is_lulus' => 0,
                'is_completed' => 0,
                'role_id' => $faker->numberBetween(1, 3),
                'dgk' => "1",
            ]);
        }
    }
}
