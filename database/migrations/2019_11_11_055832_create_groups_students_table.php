<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('groupId');
            $table->unsignedBigInteger('studentId');
            $table->timestamps();
            $table->foreign('groupId')->references('id')->on('groups')->onDelete('cascade');
            $table->foreign('studentId')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_students');
    }
}
