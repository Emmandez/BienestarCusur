<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GinecoObstetricHistory extends Model
{
	protected $table='GynecoObstetricHistories';

    protected $filliable = ['concept', 'date'];
}
