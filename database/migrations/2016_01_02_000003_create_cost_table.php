<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost', function (Blueprint $table){
            $table->increments('id');
            $table->float('reservation')->nullable();
            $table->float('land_arrangement')->nullable();
            $table->float('travel_insurance')->nullable();
            $table->float('tavel_cancelation_insurance')->nullable();
            $table->float('tax')->nullable();
            $table->float('fare')->nullable();
            $table->float('fee')->nullable();
            $table->float('discount')->nullable();
            $table->boolean('paid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cost');
    }
}
