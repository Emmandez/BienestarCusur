<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compilation extends Model
{

    protected $table     ='compilations';
    public $incrementing = 'false';

    
    protected $fillable = [
    'id',
    'questionary',
    'idResponsibleQ',
    'laborDataq',
    'idResponsibleD',
    'medicalData',
    'idResponsibleM',
    'nurseData',
    'idResponsibleN',
    'nutritionFacts',
    'idResponsibleF'
    ];

    public function patient(){
        //OneToOne Relationship. Model, Foreign key, Local key
        return $this->hasOne('App\Models\Patient');
    }

    public function job(){
        return $this->hasOne('App\Models\Job');
    }

    public function phones(){
        return $this->hasMany('App\Models\Phone');
    }

    public function address(){
        return $this->hasOne('App\Models\Address');
    }

    public function scholarship(){
        return $this->hasOne('App\Models\Scholarship');
    }

    public function otherGrades(){
        return $this->hasMany('App\Models\OtherGrade');
    }

    public function familyHistories(){
        return $this->hasMany('App\Models\FamilyHistory');
    }



    
}
