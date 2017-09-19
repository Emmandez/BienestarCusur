<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsychosocialResult extends Model
{
	protected $table='psychosocialResults';
	
    protected $fillable=
    [
    'point',
    'numberFactor'
    ];
}
