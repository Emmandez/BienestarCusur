<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGynecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyneco', function (Blueprint $table) {
            $table->mediumtext('concept');
            //Campo para llave foránea
            $table->integer('gynecoObsHis_idGynObsHis')->unsigned();

            //Relación de tablas
            $table->foreign('gynecoObsHis_idGynObsHis')->references('idGynecoObstetricHistories')->on('GynecoObstetricHistories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gyneco');
    }
}
