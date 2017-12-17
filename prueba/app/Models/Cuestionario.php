<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
	protected $fillable =  [
		'personalOpinion',
		'Comments',
		'Answer'
	];

	public function Workshops(){
		return $this->hasOne('App\Models\Workshop');
	}

	public function Dimensions(){
		return $this->hasMany('App\Models\Dimension');
	}

	public function Compilation(){
		return $this->belongsTo('App\Models\Compilation');
	}

}
