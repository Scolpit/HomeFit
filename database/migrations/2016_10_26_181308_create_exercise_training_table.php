<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_training', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_id')->unsigned()->index();
            $table->integer('exercise_id')->unsigned()->index();
            $table->integer('order');
            $table->integer('count');
            $table->boolean('isreps');
            $table->string('additionalinfo');
            $table->integer('cycle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_training');
    }
}
