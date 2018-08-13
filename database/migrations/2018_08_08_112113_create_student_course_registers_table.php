<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCourseRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courseId');
            $table->integer('studentId');
            $table->string('courseName');
            $table->string('studentName');
            $table->string('studentEmail');
            $table->string('registration');
            $table->integer('type');
            $table->integer('status');
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
        Schema::dropIfExists('student_course_registers');
    }
}
