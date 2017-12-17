<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use App\Models\User;
use App\Models\Assignment;
use App\Models\Compilation;
use Faker\Generator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(User::class, function () {
    static $password;
    return [
        'first_name' => 'Emmanuel',
        'last_name_p' => 'Hernández',
        'last_name_m' => 'Morán',
        'email' => 'e@e.com',
        'UDG_Code' => '214413693',
        'password' => $password ?: $password = bcrypt('123456'),
        'curp' => '123123123123',
        'area' => 'Medicina' ,
        'remember_token' => str_random(60)
    ];
});

$factory->define(Compilation::class, function () {
    $date       = getdate();
    $formatDate = $date['year'].'-'.$date['mon'].'-'.$date['mday'].'-'.$date['hours'].'-'.$date['minutes'].'-'.$date['seconds'];
    return [
        'id'              =>  '214413693',
        'questionary'     => 'N',
        'idResponsibleQ'  => '000000000',
        'aplicationDateQ' => $formatDate,
        'laborDataq'      => 'N',
        'idResponsibleD'  => '000000000',
        'aplicationDateD' => $formatDate,
        'medicalData'     => 'N',
        'idResponsibleM'  => '000000000',
        'aplicationDateM' => $formatDate,
        'nurseData'       => 'N',
        'idResponsibleN'  => '000000000',
        'aplicationDateN' => $formatDate,
        'nutritionFacts'  => 'N',
        'idResponsibleF'  => '000000000',
        'aplicationDateF' => $formatDate
    ];
});

$factory->define(Assignment::class, function () {
    $nombramientos = [
        'Prof. TC Investigador Asociado',
        'Prof. TC Investigador Titular',
        'Prof. TC Docente Asociado',
        'Prof. TC Docente Titular',
        'Prof. Investigador y Directivo',
        'Prof. Docente y Directivo',
        'Técnico Académico',
        'Prof. Asignatura A < 10 hrs',
        'Prof. Asignatura A > 10 hrs',
        'Prof. Asignatura B < 10 hrs',
        'Prof. Asignatura B > 10 hrs',
        'Prof. Asignatura y Directivo',
        'Prof. Asignatura Admvo o Cfza',
        'Mandos Superiores (R. Srio, D, JD)',
        'Jefe de Unidad',
        'Coor. Área, Carrera, Posgrado',
        'Admvo coor, apoyo, aux gral',
        'Técnico de coor.',
        'Jefe de apoyo Admvo, téc. optvo',
        'Téc Admvo, esp, prof, y optvo',
        'Auxiliar Admvo',
        'Auxiliar optvo',
        'Civil Académico',
        'Civil Admvo',
        'Civil Operativo',
        'Otro'
        ];
    for ($i=0; $i < 25 ; $i++) { 
        return [
            'assignment' => $nombramientos[$i]
        ];
    }
});


