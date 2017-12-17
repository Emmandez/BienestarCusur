<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemindersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remindersDetails', function (Blueprint $table) {
            $table->string('concept');
            $table->string('detail');
            $table->integer('reminder_id')->unsigned();

            $table->foreign('reminder_id')
                ->references('id')
                ->on('reminders')
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
        Schema::dropIfExists('remindersDetails');
    }
}
