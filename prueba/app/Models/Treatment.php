<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
	protected $table='treatments';
	
    protected $fillable=
    [
    'specialist',
    'diagnosis',
    'plan',
    'responsible'
    ];
}
