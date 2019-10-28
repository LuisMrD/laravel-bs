<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
        'nome',
        'ciade',
        'estado'
    ];
    //
    public function users(){

        return $this->belongsToMany(User::class)->using(LeagueUser::class);
    }
}