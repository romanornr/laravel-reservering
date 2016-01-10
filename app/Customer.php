<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $guarded = ['id','created_at','updated_at'];
	protected $dates = ['created_at', 'updated_at'];
    public function booking()
    {
    	return $this->hasMany('App\Booking','customer_id','id');
    }
    
     public function flight()
    {
    	return $this->hasMany('App\Flight','id','id');
    }
}
