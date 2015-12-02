<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klanten', function (Blueprint $table){
            $table->increments('id');
            $table->string('voornaam', 32);
            $table->string('achternaam', 32);
            $table->string('email', 250)->nullable();
            $table->string('telefoonnummer', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('klanten');
    }
}
