<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * table from flight.
     *
     * @var
     */
    protected $table = 'flight';

    /**
     * guard id
     * protection for mass assignment vulnerability.
     *
     * @var
     */
    protected $guarded = ['id'];

    /**
     * no timestamps for passengers.
     *
     * @var
     */
    public $timestamps = false;

    /**
     * belongsTo relational mapping. 
     * belongsTo booking.
     *
     * @return mixed
     */
    public function booking()
    {
        return $this->belongsTo('App\Booking', 'flight_id');
    }

    /**
     * hasMany relational mapping. 
     * hasMany outbounds.
     *
     * @return mixed
     */
    public function outbound()
    {
        return $this->hasMany('App\Outbound', 'flight_id');
    }
}
