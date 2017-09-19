<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyHistory extends Model
{
	protected $table='familyHistories';
	
    protected $filliable = [
    'concept',
    'line'
    ];
}
