<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->boolean('breakfast')->nullable();
//            $table->float('breakfast_rate')->default(0)->nullable();
            $table->boolean('lunch')->nullable();
//            $table->float('lunch_rate')->default(0)->nullable();
            $table->boolean('dinner')->nullable();
//            $table->float('dinner_rate')->default(0)->nullable();
            $table->integer('traveler_id')->nullable();
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
        Schema::dropIfExists('meals');
    }
}
