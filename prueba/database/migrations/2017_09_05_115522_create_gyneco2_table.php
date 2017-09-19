<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGyneco2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyneco2', function (Blueprint $table) {
            $table->enum('concept',['RITM','IVSA','NUMX','NUMG','NUMP',
                                    'NUMA','NUMC','MEPL','MAST','CITO']);
            $table->string('answer', 45);
            $table->integer('GynecoObstetricHistories_idGynObsHis')->unsigned();
            $table->foreign('GynecoObstetricHistories_idGynObsHis')->references('idGynecoObstetricHistories')
                ->on('GynecoObstetricHistories')
                ->onDelete('cascade');
            
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
        Schema::dropIfExists('gyneco2');
    }
}
