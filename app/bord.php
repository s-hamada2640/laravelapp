<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bord extends Model
{
    public function bigCategory() 
    {
        return $this->belongsTo('App\Big_category');
    }

    public function smallCategory() 
    {
        return $this->belongsTo('App\Small_category');
    }

    public function reply() {
        return $this->hasMany('App\Reply');
    }
    protected $guarded = array('id');
}