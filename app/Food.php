<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
    	'name','price','photo','codeno','subcategory_id'
    ];
    protected $table = "foods";
    public function orderbookings($value='')
   {
    return $this->belongsToMany('App\OrderBooking','details','food_id')
          ->withPivot('voucher_id','price','qty')
          ->withTimestamps();
   }

    public function subcategories(){

    	return $this->belongsTo('App\Subcategory','subcategory_id');
    }
}
