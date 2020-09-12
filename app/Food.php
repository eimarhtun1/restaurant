<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
    	'name','price','photo','codeno','subcategory_id'
    ];


      public function subcategories($value=''){
    	return $this->belongsTo('App\Subcategory');
    }
}
