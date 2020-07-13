<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    protected $table = "payment_detail";
    protected $primaryKey = "id_payment_detail";
    protected $guarded = [];
}
