<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    public function evento(){

        return $this->belongsTo(Event::class);
    }
}
