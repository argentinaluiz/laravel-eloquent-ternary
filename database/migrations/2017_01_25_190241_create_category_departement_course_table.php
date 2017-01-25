<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDepartementCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_departement_course', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('departement_id');
            $table->integer('course_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('departement_id')->references('id')->on('departement_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
