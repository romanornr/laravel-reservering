<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateoutboundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbound', function (Blueprint $table){
            $table->increments('id');
            $table->integer('flight_id')->unsigned()->nullable();
            $table->string('flight_number', 30);
            $table->string('departure', 150);
            $table->string('arrival', 150);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->boolean('is_return')->nullable();

            $table->foreign('flight_id')->references('id')->on('booking')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('outbound');
    }
}
