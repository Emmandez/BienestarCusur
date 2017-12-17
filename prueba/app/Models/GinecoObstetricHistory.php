<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GinecoObstetricHistory extends Model
{
	protected $table='GynecoObstetricHistories';

    protected $filliable = ['concept', 'date'];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilations');
    }

    public function gynecoResult(){
        return $this->hasMany('App\Models\GynecoResult');
    }
}
