<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     protected $fillable = [
    	'name','ph_no','voucherid','booking_date','booking_time','no_table'
    ];
}
