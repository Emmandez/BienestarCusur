<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frecuency extends Model
{
	protected $table='frequencies';
	
    protected $filliable = [
    'concept',
    'years',
    'exConsumer'
    ];
}
