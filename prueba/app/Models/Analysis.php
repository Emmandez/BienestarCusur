<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
	protected $table='Analyses';
    protected $fillable = [
    'concept',
    'state',
    'result'
    ];
}
