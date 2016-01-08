<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flight';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relatie
    public function Booking()
    {
    	return $this->belongsTo('App\Booking','booking_id');
    }
}
