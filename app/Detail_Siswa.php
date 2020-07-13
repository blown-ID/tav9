<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Siswa extends Model
{

    protected $table = 'detail_siswa';
    protected $primaryKey = 'id_siswa';
    protected $guarded = [];

    public function orangtua()
    {
        return $this->belongsTo(Orangtua::class, 'id_ortu', 'id_ortu');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // public function payment()
    // {
    //     return $this->hasMany(Payments::class, 'payment_id')
    // }
}
