<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_id');
            $table->integer('price');
            $table->integer('qty');
            $table->unsignedBigInteger('order_id');
             $table->unsignedBigInteger('food_id');


            $table->foreign('order_id')
                  ->references('id')
                  ->on('order_bookings')
                  ->onDelete('cascade');
           

              $table->foreign('food_id')
                  ->references('id')
                  ->on('foods')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('details');
    }
}
