<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class small_category extends Model
{
    public function big_categories() 
    {
        return $this -> hasMany('App\Models\board');
    }
}
