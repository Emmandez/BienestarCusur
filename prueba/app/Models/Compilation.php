<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compilation extends Model
{

    protected $table='compilations';

    
    protected $fillable = [
    'FirstName',
    'LastNameP',
    'LastNameM',
    'questionary',
    'idResponsibleQ',
    'laborDataq',
    'idResponsibleD',
    'medicalData',
    'idResponsibleM',
    'nurseData',
    'idResponsibleN',
    'nutritionFacts',
    'idResponsibleF'
    ];
}
