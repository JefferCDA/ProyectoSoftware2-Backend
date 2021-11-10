<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("day");
            $table->string("initialHour");
            $table->string("finalHour");
            $table->unsignedBigInteger("course_id")->nullable();
            $table->unsignedBigInteger("classrooms_id")->nullable();

            $table->foreign("course_id")
                ->references("id")->on("courses")
                ->onDelete("set null");

            $table->foreign("classrooms_id")
                ->references("id")->on("classrooms")
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
        Schema::dropIfExists('schedules');
    }
}
