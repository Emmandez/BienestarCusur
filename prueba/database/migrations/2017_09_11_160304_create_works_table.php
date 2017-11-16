<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            /*
            A1 = primer puesto, trabajo actual
            A2 = segundo puesto, trabajo actual

            A3 = Segundo trabajo actual

            AI1 = primer puesto, trabajo anterior inmediato
            AI2 = segundo puesto, trabajo anterior inmediato

            AAI = Trabajo anterior al anterior inmediato

            */
            $table->enum('type',['A1','A2','A3','AI1','AI2','AAI']);

            $table->string('center_work',45);
            $table->string('work_position',45);
            $table->string('antiquity',5);
            $table->longText('activities');
            $table->string('EPP');
            $table->string('accidents');

            //Campo para almacenar las llave foránea. Recordar que es una llave compuesta            
            $table->string('compilations_id');
            //$table->integer('Compilation_idCaseFile');

            //definir llave foranea. Relación entre las tablas
            $table->foreign('compilations_id')
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
        Schema::dropIfExists('works');
    }
}
