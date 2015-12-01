<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travelrequest extends Model
{
    protected $fillable = [
    	'voornaam',
    	'achternaam',
    	'email',
    	'telefoonnummer',
    	'onderwerp',
    	'bestemming',
    	'aantal_personen',
    	'vertrek',
    	'terug',
    	'toelichting'
    ];
}
