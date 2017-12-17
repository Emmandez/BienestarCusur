<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactorDim extends Model
{
    protected $fillable = [
    	'Type',
    	'Concept',
    	'Recomendation',
        'IV',
    	'Grade'
    ];

    public function Respuesta(){
    	return $this->hasMany('App\Models\Respuesta');
    }

    public function Dimension(){
    	return $this->belongsTo('App\Models\Dimension');
    }

}
