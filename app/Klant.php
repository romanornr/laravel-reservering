<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
	{
    	protected $table = 'klant';
    	protected $fillable = ['geslacht','voornaam', 'achternaam', 'email', 'telefoonnummer'];
    	public $timestamps = false;
    	
    	//relatie
		public function aanvragen()
		{
			return $this->hasMany('App\Aanvragen', 'klant_id', 'id');
		}

		public function booking()
		{
			return $this->hasMany('App\Booking', 'klant_id', 'id');
		}

}

