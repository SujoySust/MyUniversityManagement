<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('courseid');
          $table->integer('teacherid');
          $table->string('teachername');
          $table->string('subjectname');
          $table->text('subjectdetails');
          $table->time('starttime');
          $table->time('endtime');
          $table->date('date');
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
        Schema::dropIfExists('courses');
    }
}
