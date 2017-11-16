<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');

            $table->string('totalFoods',45);
            $table->string('totalCaloriesDay',45);
            $table->string('elaborated',45);
            $table->time('breakfastHour');
            $table->time('foodHour');
            $table->time('dinnerHour');
            $table->time('morningCollationHour');
            $table->time('eveningCollationHour');

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
        Schema::dropIfExists('reminders');
    }
}
