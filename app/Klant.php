<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $table = 'klant';
    protected $fillable = ['geslacht','voornaam', 'achternaam', 'email', 'telefoonnummer'];
    public $timestamps = false;
}
