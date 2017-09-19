<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonPathHistDescriptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonPathHistDescript', function (Blueprint $table) {
            //Duda. Dejar enum o string y validar los enum en el programa.
            $table->enum('concept',['ALER','TOXI','INMU']);
            $table->longtext('description');
            $table->integer('nonPathHist_idNonPathlHist')->unsigned();
            $table->foreign('nonPathHist_idNonPathlHist')
                ->references('idNonPathologicalHistories')
                ->on('nonPathologicalHistories')
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
        Schema::dropIfExists('nonPathHistDescript');
    }
}
