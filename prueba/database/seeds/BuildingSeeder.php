<?php

use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buildings = [
        	'Edificio A',
        	'Edificio B',
        	'Edificio C',
        	'Edificio D',
        	'Edificio E',
        	'Edificio F',
        	'Edificio G',
        	'Edificio H',
        	'Edificio I',
        	'Edificio J',
        	'Edificio K',
        	'Edificio L',
        	'Edificio M',
        	'Edificio N',
        	'Edificio O',
        	'Edificio P',
        	'Edificio Q',
        	'Edificio R',
        	'Edificio S',
        	'Edificio T',
        	'Edificio U',
        	'Edificio V',
        	'Edificio W',
            'Edificio X',
            'Edificio Y',
        	'Edificio Z',
        	'Edificio Estancia Infantil Cusur',
        	'Edificio De Radio Universidad',
        	'Edificio CASA (Biblioteca)',
        	'Edificio LCA (Centro Acuático)',
        	'Edificio Tienda Insignia Universitaria Cusur',
        	'Bodega de electricista y fontanero',
        	'Edificio H Dietología',
        	'Hospital Veterinario de Pequeñas y Grandes especies'
        ];

        for ($i=0; $i < sizeof($buildings) ; $i++) { 
        	\DB::table('buildings')->insert(array(
	         	'name_building' => $buildings[$i]
    		));
        }
    }
}
