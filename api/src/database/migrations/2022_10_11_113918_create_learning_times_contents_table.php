<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningTimesContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_times_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('learning_time_id');
            $table->unsignedBigInteger('content_id');

            $table->foreign('learning_time_id')->references('id')->on('learning_times')->onDelete('cascade');
            $table->foreign('content_id')->references('id')->on('learning_contents')->onDelete('cascade');
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
    }
}
