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
            $table->string('infix', 5)->nullable();
            $table->string('lastname', 50)->nullable();
            $table->string('gender', 5);
            $table->string('streetname', 60);
            $table->string('zipcode', 8);
            $table->string('housnumber', 5);
            $table->string('email', 60)->nullable();
            $table->string('city', 20);
            $table->string('mobile', 100)->nullable();
            $table->string('phone', 90)->nullable();
            $table->date('birthday');

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
