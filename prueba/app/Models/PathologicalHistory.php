<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathologicalHistory extends Model
{
	protected $table='PathologicalHistories';
	
    protected $fillable = [
    'concept',
    'description'
    ];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }
}
