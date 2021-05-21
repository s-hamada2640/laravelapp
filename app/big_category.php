<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class big_category extends Model
{
    public function bord() {
        return $this->hasMany('App/Bord');
    }
}
