<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PlayerReport extends Pivot
{
    //
    protected $fillable = [ 'position' ];
}
