<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otherGrades', function (Blueprint $table) {
            $table->enum('other_grade',['Carrera Técnica', 'Licenciatura', 'Maestría']);
            $table->string('specification', 45);

            $table->integer('scholarships_id')->unsigned();

            $table->foreign('scholarships_id')
                ->references('id')
                ->on('scholarships')
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
        Schema::dropIfExists('otherGrades');
    }
}
