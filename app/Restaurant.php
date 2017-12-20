<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function food()
    {
    	return $this->hasMany('App\Food');
    }
}
