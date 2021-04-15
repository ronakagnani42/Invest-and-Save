<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    protected $table = 'paytm';

    protected $fillable = ['name','user_id','email','mobile','status','fee','order_id','transaction_id'];
         //status = 0, failed, 
         //status = 1, success, 
         //status = 2, processing 

    public function scopePaid($query) {
        // return $query->where('')
    }

}
