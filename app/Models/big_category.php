<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class big_category extends Model
{
    public function big_categories() 
    {
        return $this -> hasMany('App\Models\board');
    }

}
