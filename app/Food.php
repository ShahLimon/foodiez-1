<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function restaurant()
    {
    	return $this->belongsTo('App\Restaurant');
    }
    
    public function order()
    {
    	return $this->hasMany('App\Order');
    }
}
