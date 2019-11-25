<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('active');
            $table->unsignedBigInteger('formId1');
            $table->unsignedBigInteger('formId2');
            $table->unsignedBigInteger('formId3');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('formId1')->references('id')->on('forms')->onDelete('cascade');
            $table->foreign('formId2')->references('id')->on('forms')->onDelete('cascade');
            $table->foreign('formId3')->references('id')->on('forms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
