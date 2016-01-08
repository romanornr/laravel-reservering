<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $guarded = ['id','created_at','updated_at'];

    public function Booking()
    {
    	return $this->hasMany('App\Booking','booking_id');
    }
    
}
