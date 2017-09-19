<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnthropometricEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anthropometric_evaluations', function (Blueprint $table) {
            # Is this really the case where we need to do database-level math?
            # Otherwise they should be done by front-end, and stored as strings.
            $table->increments('idAnthropometricEvaluation');
            $table->string('sizeMtrs');
            $table->string('current_weight');
            $table->string('habitual_weight');
            $table->string('ideal_weight');
            $table->string('imc');
            $table->enum('weightType',['BJ','PN','SP','O1','O2','O3']);
            $table->string('usualWeightPorcent');
            $table->enum('desnutritionType',['DL','DM','DG','NA','N']);
            $table->string('waist_circumference');
            $table->string('hip_circumference');
            $table->enum('waist_danger',['Y','N']);
            $table->string('ICC');
            $table->enum('ICCRisk',['B','M','A']);
            $table->string('mass_distribution');
            $table->string('wrist_circumference');
            $table->enum('complexity',['P','M','G']);
            $table->string('cmb');
            $table->string('pcb');
            $table->string('pct');
            $table->string('pcse');
            $table->string('pcsi');
            $table->string('totalMuscleMass');
            $table->string('leanMass');
            $table->string('percentajeFat');
            $table->string('fatMass');
            $table->string('totalBodywater');
            //Campos para la báscula tanita
            $table->string('percentajeFatMassT');
            $table->string('fatMassT');
            $table->string('leanMassKgT');
            $table->string('totalBodywaterKgT');

            $table->enum('physicalActivity',['Y','N']);
            $table->enum('intensity', ['ML','L','M','P','E']);  
            $table->enum('exercise',['Y','N']);
            $table->string('exerciseType',100);
            $table->string('exerciseFrequency',100);
            $table->string('exerciseDuration',100);
            $table->date('startExercise');


           
            //Campo para almacenar las llave foránea. Recordar que es una llave compuesta            
            $table->string('Compilation_idCode')->unique();
            //$table->integer('Compilation_idCaseFile');

            //definir llave foranea. Relación entre las tablas
            $table->foreign('Compilation_idCode')
                  ->references('idCode')
                  ->on('compilations')->onDelete('cascade');
            /*      
            $table->foreign('Compilation_idCaseFile')
                  ->references('idCaseFile')
                  ->on('compilations')->onDelete('cascade');
                  */
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anthropometric_evaluations');
    }
}
