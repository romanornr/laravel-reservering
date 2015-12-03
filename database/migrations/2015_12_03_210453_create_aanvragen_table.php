<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAanvragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aanvragen', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('klant_id')->unsigned();
            $table->string('onderwerp', 35);
            $table->string('bestemming', 60);
            $table->tinyInteger('aantal');
            $table->date('vertrek');
            $table->date('terug');
            $table->mediumText('toelichting');
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
        Schema::drop('aanvragen');
    }
}
