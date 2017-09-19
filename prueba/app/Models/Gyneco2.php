<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gyneco2 extends Model
{
	protected $table='gyneco2';
	
    protected $filliable = [
    'concept',
    'answer'
    ];
}
