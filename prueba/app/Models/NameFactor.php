<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NameFactor extends Model
{
	protected $table='factors';
	
    protected $filliable = [
    'recomendation'
    ];
}
