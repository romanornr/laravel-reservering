<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $guarded = ['id'];

    public function customer()
    {
    	return $this->belongsTo('App\Customer','customer_id');
    }

    public function flight()
    {
    	return $this->hasOne('App\Flight','id','flight_id');
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
