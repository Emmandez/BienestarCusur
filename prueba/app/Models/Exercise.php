<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    protected $table = 'exercises';

    protected $fillable = 
    [
    'intensity',
    'exercise_type',
    'exercise_frequency',
    'exercise_duration',
    'start_date_exercise'
    ];
}
