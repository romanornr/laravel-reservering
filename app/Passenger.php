<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{

	protected $table = 'passenger';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function booking()
    	{
    		return $this->belongsTo('App\Booking','booking_id','id');
    	}
}
