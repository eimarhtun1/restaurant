<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable =['name','category_id'];

      public function category($value=''){
    	return $this->belongsTo('App\Category');
    }
    public function foods($value='')
    {
    	return $this->hasMany('App\Food');
    }

    //  public function items($value=''){
    // 	return $this->belongsTo('App\Item');
    // }
}
