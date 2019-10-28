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

    public function league(){

        return $this->belongsTo(League::class);
    }
}