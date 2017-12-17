<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $fillable = [
    	'question',
    	'answer'
    ];

    public function factor_dims(){
    	return $this->belongsTo('App\Models\FactorDim::class');
    }
}
