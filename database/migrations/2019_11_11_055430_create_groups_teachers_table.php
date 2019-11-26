<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('groupId');
            $table->unsignedBigInteger('teacherId');
            $table->string('subject');
            $table->boolean('tutoria')->default(false);
            $table->timestamps();
            $table->foreign('groupId')->references('id')->on('groups')->onDelete('cascade');
            $table->foreign('teacherId')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_teachers');
    }
}
