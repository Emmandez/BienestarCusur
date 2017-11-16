<?php

use Illuminate\Database\Seeder;
use App\Models\Assignment;

class AssignmentSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
	         \DB::table('assignments')->insert(array(
	         	'assignment' => $nombramientos[$i]
    		));
	    }
    }
}
