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
        Schema::create('anthropometricEvaluations', function (Blueprint $table) {
            # Is this really the case where we need to do database-level math?
            # Otherwise they should be done by front-end, and stored as strings.
            $table->increments('id');
            $table->string('height');
            $table->string('current_weight');
            $table->string('habitual_weight');
            $table->string('hip_circumference');
            $table->string('waist_circumference');
            $table->string('wrist_circumference');
            $table->string('cmb');
            $table->string('pcb');
            $table->string('pct');
            $table->string('imc');
            $table->string('weight_category');
            $table->string('ideal_weight');
            $table->string('habitual_weightPercent');
            $table->string('icc');
            $table->string('waist_danger');
            $table->string('iccRisk');
            $table->string('mass_distribution');
            $table->string('complexity');
            $table->string('pcse');
            $table->string('pcsi');
            $table->string('muscleKG');
            $table->string('lean_MassKg');
            $table->string('lean_MassKgTanita');
            $table->string('total_water_tanita');
            $table->string('desnutrition_grade');
            $table->string('greasePercent');
            $table->string('grease_massKG');
            $table->string('total_corporal_water');
            $table->string('masa_grasaTanitaPercent');
            $table->string('masa_grasaTanitaKG');
            $table->enum('physicalActivity',['SI','NO']);
            $table->enum('exercise',['SI','NO']);

            //Campo para almacenar las llave foránea. 
            $table->string('compilation_id');
            //$table->integer('Compilation_idCaseFile');

            //definir llave foranea. Relación entre las tablas
            $table->foreign('compilation_id')
                  ->references('id')
                  ->on('compilations')
                  ->onDelete('cascade');


           
            
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
        Schema::dropIfExists('anthropometricEvaluations');
    }
}
