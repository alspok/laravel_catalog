<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function caegoriesId()
    {
    	return $this->hasMany('App\Http\Controllers\Relations', 'product_id', 'id');

    }
}
