<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
	protected $table='factors';
	
    protected $filliable = [
    'conceptofactor'
    ];

    public function work(){
    	return $this->belongsTo('App\Models\Work');
    }
}
