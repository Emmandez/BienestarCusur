<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
	protected $table='Systems';
	
    protected $fillable=
    [
    'concept',
    'description'
    ];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }
}
