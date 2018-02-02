<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompilationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compilations', function (Blueprint $table) {
            $table->string('id', 10)->unique();
            $table->primary('id');

            $table->enum('questionary', ['Y','N']);
            $table->char('idResponsibleQ',9);
            $table->dateTime('aplicationDateQ');
            $table->enum('laborDataQ',['Y','N']);
            $table->char('idResponsibleD',9);
            $table->dateTime('aplicationDateD');
            $table->enum('medicalData',['Y','N']);
            $table->char('idResponsibleM',9);
            $table->dateTime('aplicationDateM');
            $table->enum('nurseData',['Y','N']);
            $table->char('idResponsibleN',9);
            $table->dateTime('aplicationDateN');
            $table->enum('nutritionFacts',['Y','N']);
            $table->char('idResponsibleF',9);
            $table->dateTime('aplicationDateF');
            
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
        Schema::dropIfExists('compilations');
    }
}
