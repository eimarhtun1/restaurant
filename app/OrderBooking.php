<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;

class OrderBooking extends Model
{
    protected $fillable=[
          'voucherid','order_date','total','status','user_id'
    ];

    public function foods($value='')
   {
    return $this->belongsToMany('App\Food','details')
          ->withPivot('qty')
          ->withTimestamps();
   }
   public function user($value='')
   {
    return $this->belongsTo('App\User');
   }
}
