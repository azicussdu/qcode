<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name', 512);
            $table->string('description', 2000)->nullable();
            $table->string('alias', 512)->unique();
            $table->mediumInteger('with_mentor_cost')->unsigned()->nullable();
            $table->mediumInteger('no_mentor_cost')->unsigned()->nullable();
            $table->tinyInteger('lecture_lessons')->unsigned()->nullable();
            $table->tinyInteger('practice_lessons')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
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
