<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherGrade extends Model
{
	protected $table='otherGrades';
	
    protected $fillable =
    [
    'other_grade',
    'specifitacion'
    ];
}
