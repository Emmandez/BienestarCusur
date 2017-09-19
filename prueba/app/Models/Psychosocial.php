<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psychosocial extends Model
{
	protected $table='psychosocial';
	
    protected $fillable=
    [
    'question',
    'answer'
    ];
}
