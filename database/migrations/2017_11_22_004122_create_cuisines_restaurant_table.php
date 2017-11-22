<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuisinesRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisines_restaurant', function (Blueprint $table) {
           $table->unsignedInteger('cuisine_id');
           $table->foreign('cuisine_id')->references('id')->on('cuisines');
           $table->unsignedInteger('restaurant_id');
           $table->foreign('restaurant_id')->references('id')->on('restaurants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisines_restaurant');
    }
}
