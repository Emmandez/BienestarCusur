<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table='reminders';
    protected $fillable=
    [
    'totalFoods',
    'totalCaloriesDay',
    'breakfastHour',
   	'foodHour',
   	'dinnerHour',
   	'morningCollationHour',
   	'eveningCollationHour'
    ];

    public function reminderDetail(){
      return $this->hasMany('App\Models\ReminderDetail');
    }

    public function compilation(){
      return $this->belongsTo('App\Models\Compilation');
    }
}
