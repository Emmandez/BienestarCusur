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
            $table->enum('concept',['DESA','COMA','COMI','COVE','CENA','BREH','FOOH','DINH','MOCH','EVCH']);

            $table->string('detail', 45);
            $table->integer('reminders_id')->unsigned();

            $table->foreign('reminders_id')
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
