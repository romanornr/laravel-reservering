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
            $table->integer('outbound_id')->unsigned();
            $table->string('departure', 150);
            $table->string('arrival', 150);
            $table->string('type', 30)->nullable();
            $table->boolean('multi_leg');
            $table->tinyInteger('stops')->default(0);
            $table->string('comment')->nullable();
            $table->timestamps();

            $table->foreign('outbound_id')->references('id')->on('outbound')->onDelete('cascade');
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
