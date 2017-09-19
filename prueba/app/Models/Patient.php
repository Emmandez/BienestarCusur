<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table='patients';
	
    protected $fillable = [
    'civil_status',
    'gender',
    'birth_date',
    'age',
    'dependents',
    'birth_place'
    ];
}
