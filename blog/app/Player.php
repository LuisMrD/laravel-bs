<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'nome',
        'pontos'
    ];

    public function report(){

        return $this->belongsToMany(Report::class)->using(PlayerReport::class);
    }

    public function league(){

        return $this->belongsToMany(Ranking::class)->using(RankingPlayer::class);
    }
}

