<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    //
    public function league(){

        return $this->belongsToMany(League::class)->using(RankingLeague::class);
    };
}
