<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
	//Campos de la tabla que puede llenar el usuario
    protected $fillable = [
    	'assignment'
    ];
}
