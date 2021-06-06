<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    public function bord() {
        return $this->belongsTo('App\Bord');
    }

    protected $fillable = [
        'name', 'comment', 'bords_id',
    ];
}