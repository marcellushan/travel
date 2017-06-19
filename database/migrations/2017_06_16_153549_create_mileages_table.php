<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMileagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mileages', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('origination')->nullable();
            $table->boolean('termination')->nullable();
            $table->integer('commute_miles')->nullable();
            $table->integer('home_to_destination_miles')->nullable();
            $table->integer('campus_to_destination_miles')->nullable();
            $table->string('commute_map')->nullable();
            $table->string('home_to_destination_map')->nullable();
            $table->string('campus_to_destination_map')->nullable();
            $table->integer('travelers_id')->nullable();

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
        Schema::dropIfExists('mileages');
    }
}
