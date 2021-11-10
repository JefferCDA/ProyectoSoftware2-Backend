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
            $table->integer("coursesinprogramsid");
            $table->integer("programid");
            $table->integer("courseid");
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
