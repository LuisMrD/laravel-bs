<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
        'name',
        'city',
        'district'
    ];
    //
    // public function users(){

    //     return $this->belongsToMany(User::class)->using(LeagueUser::class);
    // }
    public function users()
    {
        return $this->hasManyThrough('App\User', 'App\LeagueUser');
    }

    public function events()
    {
        return $this->hasManyThrough('App\Event', 'App\LeagueEvent');
    }
}