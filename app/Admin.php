<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password', 'role_id',
    ];

    protected $attributes = [
        'bayar_pendaftaran' => 1,
        'dgk' => 0,
        'sudah_cetak' => 0,
        'is_lulus' => 0,
        'is_completed' => 0,
        'no_telp' => "0",
        'photo' => "default.jpg",
    ];

    protected $primaryKey = "id_user";
    protected $table = "users";
    protected $guard_name = 'web';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
