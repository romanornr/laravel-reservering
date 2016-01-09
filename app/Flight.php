<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flight';
    protected $guarded = ['id'];
    public $timestamps = false;

    //relatie
    public function booking()
    {
    	return $this->belongsTo('App\Booking','flight_id');
    }
}
