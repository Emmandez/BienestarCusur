<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonPathHistDescription extends Model
{
	protected $table='nonPathHistDescript';
	
    protected $fillable = [
   	'concept',
   	'description'
   	];
}
