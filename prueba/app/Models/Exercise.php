<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    protected $table = 'exercises';

    protected $fillable = 
    [
    'type',
    'frequency',
    'duration',
    'start_date'
    ];
}
