<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesinprogramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursesinprograms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("program_id")->nullable();
            $table->unsignedBigInteger("course_id")->nullable();

            $table->foreign("program_id")
                ->references("id")->on("programs")
                ->onDelete("set null");

            $table->foreign("course_id")
                ->references("id")->on("courses")
                ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coursesinprograms');
    }
}
