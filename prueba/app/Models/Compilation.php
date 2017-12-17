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

    //Relationships from SplceEML controller
    public function patient(){
        //OneToOne Relationship. Model, Foreign key, Local key
        //Example: return $this->hasOne('modelo ruta o clase', 'nombre del campo de la llave foranea en la tabla');
        return $this->hasOne('App\Models\Patient::class');
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

    //Relationships from NurseryController
    public function vitalSigns(){
        return $this->hasMany('App\Models\VitalSigns');
    }

    //Relationships from MedicsController
    public function familyHistories(){
        return $this->hasMany('App\Models\FamilyHistory');
    }

    public function pathologicalHistory(){
        return $this->hasMany('App\Models\PathologicalHistory');
    }

    public function nonPathologicalHistory(){
        return $this->hasMany('App\Models\NonPathologicalHistory');
    }

    public function ginecoObstetricHistory(){
        return $this->hasMany('App\Models\GinecoObstetricHistory');
    }

    public function generalGynecoData(){
        return $this->hasMany('App\Models\GeneralGynecoData');
    }

    public function datosGineco(){
        return $this->hasMany('App\Models\DatosGineco');
    }

    
    //Relationships from SplceALController
    public function work(){
        return $this->hasMany('App\Models\Work');
    }

    //Relationships from MedicsEXPController
    public function system(){
        return $this->hasMany('App\Models\System');
    }

    public function exploration(){
        return $this->hasMany('App\Models\Exploration');
    }

    //Relationships from NutriologyController
    public function anthropometricEvaluation(){
        return $this->hasMany('App\Models\AnthropometricEvaluation');
    }

    public function Cuestionario(){
        return $this->hasMany('App\Models\Cuestionario');
    }



 
    



    
}
