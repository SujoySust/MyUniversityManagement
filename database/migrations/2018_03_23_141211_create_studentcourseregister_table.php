<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentcourseregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course_register', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courseid');
            $table->string('coursename');
            $table->string('name');
            $table->string('registration');
            $table->string('email');
            $table->integer('type');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_course_register');
    }
}
