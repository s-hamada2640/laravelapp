<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class small_category extends Model
{
    public function bord() {
        return $this->hasMany('App/Bord');
    }
}
