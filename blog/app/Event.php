<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'date',
        'hour',
        'street',
        'number',
        'city',
        'district'
    ];

    public function league(){

        return $this->belongsTo(League::class);
    }
}