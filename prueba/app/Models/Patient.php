<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table='patients';
    public $incrementing = 'false';
	
    protected $fillable = [
    'FirstName',
    'LastNameP',
    'LastNameM',
    'civil_status',
    'gender',
    'birth_date',
    'dependents',
    'birth_place',
    'child_number',
    'dateRegistry',
    //'compilations_id'
    ];

    public function compilation(){
        return $this->belongsTo('App\Models\Compilation');
    }
}
