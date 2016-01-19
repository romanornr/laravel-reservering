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

    public function passenger()
    {
    	return $this->hasMany('App\Passenger','booking_id');
    }

    public function Cost()
    {
    	return $this->hasOne('App\Cost','cost_id');
    }

    public function outbound()
    {
        return $this->hasManyThrough('App\Outbound', 'App\Flight','id','flight_id');
    }

}
