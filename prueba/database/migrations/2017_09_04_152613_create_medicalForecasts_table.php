<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalForecastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalForecasts', function (Blueprint $table) {
            $table->mediumText('descript');
            $table->integer('Treatments_idTreatments')->unsigned();
            $table->foreign('Treatments_idTreatments')->references('idTreatments')->on('Treatments')->onDelete('cascade');
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
        Schema::dropIfExists('medicalForecasts');
    }
}
