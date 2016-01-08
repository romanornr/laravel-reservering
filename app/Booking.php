<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $guarded = [];

    public function bookingable()
    {
        return $this->morphTo();
    }

    public function Customer()
    {
    	return $this->belongsTo('App\Customer','customer_id');
    }

    public function Flight()
    {
    	return $this->hasOne('App\Flight','flight_id');
    }

    public function Passenger()
    {
    	return $this->hasMany('App\Passenger','passenger_id');
    }

    public function Cost()
    {
    	return $this->hasOne('App\Cost','cost_id');
    }

}
