<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathologicalHistory extends Model
{
	protected $table='PathologicalHistories';
	
    protected $fillable = [
    'concept',
    'description'
    ];
}
