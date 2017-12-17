<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
		'T1',
		'T2',
		'T3'
	];
    
    public function Cuestinario(){
    	return $this->belongsTo('App\Models\Cuestinario');
    }
}
