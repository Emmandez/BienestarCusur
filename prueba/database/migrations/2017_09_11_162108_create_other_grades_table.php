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
            $table->enum('other_grade',['CATE', 'LICE', 'MAES']);
            $table->string('specification', 45);

            $table->integer('Scholarships_idScholarships')->unsigned();

            $table->foreign('Scholarships_idScholarships')->references('idScholarships')->on('scholarships')->onDelete('cascade');

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
