<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['klant_id','onderwerp','bookingDate','DepartureDate','type','discount','paid'];

    public function klant()
    {
    	return $this->belongsTo('App\Klant','klant_id');
    }
}
