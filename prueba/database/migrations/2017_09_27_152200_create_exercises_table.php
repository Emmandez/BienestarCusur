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
            $table->enum('intensity', ['ML','L','M','P','E']);
            $table->string('exercise_type', 45);
            $table->integer('exercise_frequency');
            $table->float('exercise_duration');

            $table->integer('anthropometricEvaluations_id')->unsigned();

            $table->foreign('anthropometricEvaluations_id')
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
