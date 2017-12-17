<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->string('contract');
            $table->string('schedule');
            $table->string('area');
            $table->integer('antiquity_years');
            $table->integer('antiquity_months');
            $table->integer('incapacity_days_last_year');

            //El empleo se relaciona con la tabla compilations. 
            //La cual tiene el código del empleado
            $table->string('compilation_id');

            $table->foreign('compilation_id')
                ->references('id')
                ->on('compilations')
                ->onDelete('cascade');

            //FALTA RELACIONAR.
            /* se relaciona con compilations o patients?
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
        Schema::dropIfExists('jobs');
    }
}
