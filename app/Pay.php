<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $table = 'pays';
    protected $fillable = ['user_id', 'transaction_id', 'payment_reciept'];
}
