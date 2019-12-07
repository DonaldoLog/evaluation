<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedEvalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_eval', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('evaluationId');
            $table->unsignedBigInteger('groupId');
            $table->foreign('studentId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('evaluationId')->references('id')->on('evaluations')->onDelete('cascade');
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
        Schema::dropIfExists('completed_eval');
    }
}
