<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
    	'name','price','photo','codeno','subcategory_id'
    ];
    protected $table = "foods";

    public function subcategories(){

    	return $this->belongsTo('App\Subcategory','subcategory_id');
    }
}
