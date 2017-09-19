<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalForecast extends Model
{
	protected $table='medicalForecasts';
	
    protected $filliable = [
    'descript'
    ];
}
