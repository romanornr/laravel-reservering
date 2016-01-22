<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * table from customer
     * @var $table
     */
    protected $table = 'customer';

    /**
     * guard id, created_at and updated_at
     * protection for mass assignment vulnerability
     * @var $guarded
     */
    protected $guarded = ['id','created_at','updated_at'];

    /**
     * put $dates in to Carbon instances for date mutation
     * @var $dates
     */
	protected $dates = ['created_at', 'updated_at'];

    /**
     * hasMany relational mapping. 
     * hasMany booking
     * @return mixed
     */
    public function booking()
    {
    	return $this->hasMany('App\Booking','customer_id','id');
    }
    
    /**
     * hasMany relational mapping. 
     * hasMany flight
     * @return mixed
     */
     public function flight()
    {
    	return $this->hasMany('App\Flight','id','id');
    }

    /**
     * hasMany relational mapping. 
     * hasMany aanvragen
     * @return mixed
     */
    public function aanvragen()
        {
            return $this->hasMany('App\Aanvragen', 'customer_id', 'id');
        }
}
