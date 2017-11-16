<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
	protected $table='phones';
	
    protected $fillable=
    [
    'phoneNumber',
    'type'
    ];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }
}
