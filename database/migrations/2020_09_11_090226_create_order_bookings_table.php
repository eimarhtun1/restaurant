<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('voucherid');
            $table->date('order_date');
            $table->integer('total');
            
            
            $table->tinyInteger('status')->default(0);
           
            $table->unsignedBigInteger('user_id');
            
           
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('order_bookings');
    }
}
