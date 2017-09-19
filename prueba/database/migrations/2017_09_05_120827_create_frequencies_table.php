<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencies', function (Blueprint $table) {
            $table->increments('idFrequencies');
            $table->enum('concept',['TABA','ALCO','TOXI']);
            $table->string('years',2);
            $table->enum('exConsumer',['SI','NO']);

            $table->integer('nonPathHist_idNonPathlHist')->unsigned();

            $table->foreign('nonPathHist_idNonPathlHist')->references('idNonPathologicalHistories')
                ->on('nonPathologicalHistories')
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
        Schema::dropIfExists('frequencies');
    }
}
