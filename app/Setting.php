<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $primaryKey = "id_setting";
    protected $table = "settings";
    protected $guarded = [];
}
