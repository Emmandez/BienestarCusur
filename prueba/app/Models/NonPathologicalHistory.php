<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonPathologicalHistory extends Model
{
	protected $table='nonPathologicalHistories';

	protected $filliable = [
    'bloodType',
    'housingServices',
    'properFeeding'
    ];


    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }

    public function frecuency(){
        return $this->hasMany('App\Models\Frecuency');
    }

    public function desc_Toxico(){
        return $this->hasMany('App\Models\Desc_Toxico');
    }

    public function nonPathHistDescription(){
        return $this->hasMany('App\Models\NonPathHistDescription');
    }

	
}
