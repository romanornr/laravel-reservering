<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table){
            $table->increments('id');
            $table->string('firstname', 32);
            $table->string('infix', 20)->nullable();
            $table->string('lastname', 50);
            $table->string('gender', 5);
            $table->string('streetname', 60)->nullable();
            $table->string('zipcode', 8)->nullable();
            $table->string('housnumber', 5)->nullable();
            $table->string('email', 60)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('phone', 90)->nullable();
            $table->date('birthday')->nullable();

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
        Schema::drop('customer');
    }
}
