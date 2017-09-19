<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReminderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminderDetails', function (Blueprint $table) {
            $table->enum('concept',['DESA','COMA'
                ,'COMI','COVE','CENA','BREH','FOOH','DINH','MOCH','EVCH']);

            $table->string('detail', 45);
            $table->integer('Reminder_idReminder')->unsigned();

            $table->foreign('Reminder_idReminder')->references('idReminder')->on('reminders')->onDelete('cascade');

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
        Schema::dropIfExists('reminderDetail');
    }
}
