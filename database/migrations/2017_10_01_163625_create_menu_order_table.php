<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_order', function (Blueprint $table) {
            $table->integer('menu__id')->unsigned();
            $table->integer('order_id')->unsigned();

            $table->foreign('menu__id')->references('id')->on('menus');
            $table->foreign('order_id')->references('id')->on('orders');

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
        Schema::dropIfExists('menu_order');
    }
}
