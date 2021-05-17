<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    public function big_categories() 
    {
        return $this -> belongsTo('App\Models\big_category');
    }
    public function small_categories() 
    {
        return $this -> belongsTo('App\Models\small_category');
    }
}
