<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
    * table from flight
    * @var $table
    */
    protected $table = 'booking';

    /**
    * guard id
    * protection for mass assignment vulnerability
    * @var $guarded
    */
    protected $guarded = ['id'];

    /**
    * belongsTo relational mapping. 
    * belongsTo customer
    * @return mixed
    */
    public function customer()
    {
    	return $this->belongsTo('App\Customer','customer_id');
    }

    /**
    * hasOne relational mapping. 
    * hasOne flight
    * @return mixed
    */
    public function flight()
    {
    	return $this->hasOne('App\Flight','id','flight_id');
    }

    /**
    * hasMany relational mapping. 
    * hasMany passenger
    * @return mixed
    */
    public function passenger()
    {
    	return $this->hasMany('App\Passenger','booking_id');
    }

    /**
    * hasOne relational mapping. 
    * hasOne cost
    * @return mixed
    */
    public function Cost()
    {
    	return $this->hasOne('App\Cost','id','cost_id');
    }

    /**
    * hasMany relational mapping. 
    * hasMany outbound
    * @return mixed
    */
    public function outbound()
    {
        return $this->hasMany('App\Outbound', 'flight_id');
    }

}
