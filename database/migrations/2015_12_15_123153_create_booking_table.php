<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table){
            $table->increments('id');
            $table->integer('klant_id')->unsigned();
            $table->string('bookingDate');
            $table->string('departureDate');
            $table->string('type');
            $table->float('discount');
            $table->float('total');
            $table->boolean('paid');
            $table->timestamps();
            $table->foreign('klant_id')->references('id')->on('klant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('booking');
    }
}
