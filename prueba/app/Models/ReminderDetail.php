<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReminderDetail extends Model
{
	protected $table='reminderDetails';
	
    protected $fillable=
    [
    'concept',
    'detail'
    ];
}
