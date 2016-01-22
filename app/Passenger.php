<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    /**
     * table from passengers in the airplane
     * @var $table
     */
	protected $table = 'passenger';
    /**
     * guard id
     * protection for mass assignment vulnerability
     * @var $guarded
     */
    protected $guarded = ['id'];

    /**
     * no timestamps for passengers
     * @var $timestamps
     */
    public $timestamps = false;

    /**
     * belongsTo relational mapping. 
     * belongsTo Booking
     * @return mixed
     */
    public function booking()
    	{
    		return $this->belongsTo('App\Booking','booking_id','id');
    	}

     /**
     * belongsTo relational mapping. 
     * belongsTo customer
     * @return mixed
     */
    public function customer()
    {
    	return $this->belongsTo('App\Customer','id');
    }
}
