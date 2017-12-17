<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table='works';
    
    protected $fillable=
    [
    'type',
    'center_work',
    'work_position',
    'antiquity',
    'activities',
    'EPP',
    'accidents'
    ];

    public function factor(){
        return $this->hasMany('App\Models\Factor');
    }

    public function compilation(){
        return $this->belongsTo('App\Models\Compilation');
    }
}
