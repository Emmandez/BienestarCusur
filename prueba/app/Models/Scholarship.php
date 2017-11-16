<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
	protected $table='scholarships';
	
    protected $fillable=
    [
    'lastGrade',
    'specification'
    ];

    public function compilation(){
    	return $this->belongsTo('App\Models\Compilation');
    }

    public function otherGrades(){
        return $this->hasMany('App\Models\OtherGrade');
    }
}
