<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderBooking extends Model
{
    protected $fillable=[
          'voucherid','order_date','total','no_person','booking_time','address','status','food_id','user_id'
    ];

   //  public function items($value='')
   // {
   // 	return $this->belongsToMany('App\Item','order_detail')
   // 				->withPivot('qty')
   // 				->withTimestamps();
   // }
   // public function user($value='')
   // {
   // 	return $this->belongsTo('App\User');
   // }
}
