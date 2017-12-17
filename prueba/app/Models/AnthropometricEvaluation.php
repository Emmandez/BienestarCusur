<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnthropometricEvaluation extends Model
{
    protected $table='anthropometric_evaluations';
    
    protected $fillable = [
        'height',
        'current_weight',
        'habitual_weight',
        'hip_circumference',
        'waist_circumference',
        'wrist_circumference',
        'cmb',
        'pcb',
        'pct',
        //Second div
        'imc',
        'weight_category',
        'ideal_weight',
        'habitual_weightPercent',
        'icc',
        'waist_danger',
        'iccRisk',
        'mass_distribution',
        'complexity',

        //second item
        'pcse',
        'pcsi',
        'muscleKG',
        'lean_MassKG',
        'lean_MassKgTanita',
        'total_water_tanita',

        //Second div
        'desnutrition_grade',
        'greasePercent',
        'grease_massKG',
        'total_corporal_water',
        'masa_grasaTanitaPercent',
        'masa_grasaTanitaKG',
        'physicalActivity',
        'exercise'
    ];

    public function compilation(){
        return $this->belongsTo('App\Models\Compilation');
    }

    public function exercise(){
        return $this->hasOne('App\Models\Exercise');
    }

    public function physicalActivity(){
        return $this->hasOne('App\Models\PhysicalActivity');
    }

    public function reminder(){
        return $this->hasOne('App\Models\Reminder');
    }
}
