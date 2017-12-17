<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosGineco extends Model
{
	protected $table = 'datos_ginecos';
    protected $fillable = ['concept'];

    public function vphResult(){
        return $this->hasMany('App\Models\VphResult');
    }

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }
}
