<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    protected $fillable = 
    [
    	'designation',
    	'contract',
    	'schedule',
    	'area',
    	'antiquity_years',	
    	'antiquity_months',	
    	'incapacity_days_last_year'	
    ];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }
}
