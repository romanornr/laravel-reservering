<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateflightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight', function (Blueprint $table){
            $table->increments('id');
            $table->integer('booking_id')->unsigned();
            $table->string('type', 30)->nullable();
            $table->boolean('multi_leg');
            $table->tinyInteger('stops')->default(0);
            $table->string('comment')->nullable();

            $table->foreign('booking_id')->references('id')->on('booking')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flight');
    }
}
