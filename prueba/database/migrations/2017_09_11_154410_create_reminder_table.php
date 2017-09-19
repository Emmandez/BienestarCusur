<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReminderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Al parecer esta tabla se relaciona con la tabla anthopometricEvaluation
     *
     *
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('idReminder');

            $table->string('totalFoods',45);
            $table->string('totalCaloriesDay',45);
            $table->string('elaborated',45);
            $table->time('breakfastHour');
            $table->time('foodHour');
            $table->time('dinnerHour');
            $table->time('morningCollationHour');
            $table->time('eveningCollationHour');


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
        Schema::dropIfExists('reminder');
    }
}
