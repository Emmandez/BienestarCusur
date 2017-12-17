<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    
    protected $fillable = [
    	'Concept',
    	'IV',
    	'Recomendation',
    	'Grade'
    ];

    public function FactorDim(){
    	return $this->hasMany('App\Models\FactorDim');
    }

    public function Cuestionario(){
    	return $this->belongsTo('App\Models\Cuestionario');
    }
}
