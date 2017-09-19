<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->string('workshopName', 45);
            $table->enum('priority', ['1','2','3']);

            $table->integer('psychosocial_idPsychosocial')->unsigned();
            $table->foreign('psychosocial_idPsychosocial')
                  ->references('idPsychosocial')
                  ->on('psychosocial')->onDelete('cascade');

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
        Schema::dropIfExists('workshops');
    }
}
