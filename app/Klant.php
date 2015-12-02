<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $table = 'klanten';
    protected $fillable = ['geslacht','voornaam', 'achternaam', 'email', 'telefoonnummer'];
    public $timestamps = false;
}
