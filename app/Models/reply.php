<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    public function big_categories() 
    {
        return $this -> hasMany('App\Models\board');
    }
}
