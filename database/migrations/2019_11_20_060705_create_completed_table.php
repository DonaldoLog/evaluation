<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('pollId');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('studentId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pollId')->references('id')->on('polls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completed');
    }
}
