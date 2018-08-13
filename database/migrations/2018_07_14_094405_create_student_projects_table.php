<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('category_id');
            $table->string('project_name');
            $table->string('project_pic')->nullable();
            $table->string('project_link')->nullable();
            $table->string('technology')->nullable();
            $table->integer('project_percentage');
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
        Schema::dropIfExists('student_projects');
    }
}
