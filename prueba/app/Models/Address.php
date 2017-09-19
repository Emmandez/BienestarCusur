<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	//Nombre de la tabla. Si los nombres no siguen la sintaxis de laravel (nombre en plurar para la tabla y singular para el modelo), se debe de indicar con qué tabla se va a relacionar el modelo
	protected $table = 'addresses';
	//Valores que puede llenar el usuario
    protected $fillable = [
    'street',
    'number',
    'postalCode',
    'suburb',
    'addressType'
    ];
}
