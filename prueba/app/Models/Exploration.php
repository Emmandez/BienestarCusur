<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exploration extends Model
{
	protected $table='explorations';
	
    protected $filliable = [
    'orgSis',
    'concept',
    'condition',
    'description'
    ];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }
}
