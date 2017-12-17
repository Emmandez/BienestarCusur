<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('frequency');
            $table->float('duration');
            $table->date('start_date');

            $table->integer('anthropometricEvaluation_id')->unsigned();

            $table->foreign('anthropometricEvaluation_id')
                  ->references('id')
                  ->on('anthropometricEvaluations')
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
        Schema::dropIfExists('exercises');
    }
}
