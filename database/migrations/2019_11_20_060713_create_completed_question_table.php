<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('score');
            $table->unsignedBigInteger('questionId');
            $table->unsignedBigInteger('pollId');
            $table->unsignedBigInteger('studentId');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('studentId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pollId')->references('id')->on('polls')->onDelete('cascade');
            $table->foreign('questionId')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completed_question');
    }
}
