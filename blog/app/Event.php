<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'data',
        'hora',
        'rua',
        'numero',
        'cidade',
        'estado'
    ];

    public function liga(){

        return $this->belongsTo(League::class);
    }
}