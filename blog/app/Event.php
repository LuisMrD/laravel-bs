<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'format',
        'address',
        'value'
    ];

    public function league(){
        return $this->belongsTo(League::class);
    }
}
