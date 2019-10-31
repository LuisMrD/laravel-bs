<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeckList extends Model
{
    //
    protected $fillable = [
        'name',
        'author',
        'list'
    ];
}