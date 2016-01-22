<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatecostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost', function (Blueprint $table) {
            $table->increments('id');
            $table->float('reservation')->nullable();
            $table->float('land_arrangment')->nullable();
            $table->float('travel_insurrance')->nullable();
            $table->float('travel_cancelation_insurrance')->nullable();
            $table->float('tax')->nullable();
            $table->float('fare')->nullable();
            $table->float('fee')->nullable();
            $table->float('discount')->nullable();
            $table->boolean('paid');
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
        Schema::drop('cost');
    }
}
