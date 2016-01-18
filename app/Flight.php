<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flight';
    protected $guarded = [];
    public $timestamps = false;

    //relatie
    public function booking()
    {
    	return $this->belongsTo('App\Booking','flight_id');
    }

    public function outbound()
    {
    	return $this->hasMany('App\Outbound','flight_id');
    }
}
