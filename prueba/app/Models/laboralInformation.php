<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laboralInformation extends Model
{
	protected $table='laboralInfo';
	
    protected $filliable = [
    'work_turn',
    'type_contract',
    'work_area',
    'antiquity',
    'incapacity_days_last_year'
    ];
}
