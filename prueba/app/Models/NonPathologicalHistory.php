<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonPathologicalHistory extends Model
{
	protected $table='nonPathologicalHistories';

	protected $filliable = [
    'bloodType',
    'housingServices',
    'properFeeding'
    ];

	
}
