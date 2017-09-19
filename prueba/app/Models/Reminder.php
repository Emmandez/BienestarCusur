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
    'elaborated',
    'breakfastHour',
   	'foodHour',
   	'dinnerHour',
   	'morningCollationHour',
   	'eveningCollationHour'
    ];
}
