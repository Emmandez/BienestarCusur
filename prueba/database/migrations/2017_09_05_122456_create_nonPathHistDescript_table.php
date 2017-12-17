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
            $table->string('concept');
            $table->longtext('description');

            
            $table->integer('nonPathologicalHistory_id')->unsigned();

            $table->foreign('nonPathologicalHistory_id')
                  ->references('id')
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
