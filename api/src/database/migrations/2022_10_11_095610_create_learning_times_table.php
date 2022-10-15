<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('learning_time');
            $table->date('learning_time_date');
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
        Schema::dropIfExists('learning_times_contents');
        Schema::dropIfExists('learning_times_languages');
        Schema::dropIfExists('learning_times');
    }
}
