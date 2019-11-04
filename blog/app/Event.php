<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'league_id',
        'date',
        'hour',
        'format',
        'type',
        'rule',
        'street',
        'number',
        'complement',
        'city',
    ];

    public function league(){

        return $this->belongsTo(League::class);
    }
}