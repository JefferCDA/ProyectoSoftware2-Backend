<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("number");
            $table->boolean("state");

            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("role_id")->nullable();

            $table->foreign("user_id")
            ->references("id")->on("users")
            ->onDelete("set null");

            $table->foreign("role_id")
            ->references("id")->on("roles")
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
        Schema::dropIfExists('licenses');
    }
}
