<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    /**
     * table from outbounds of the flight.
     *
     * @var
     */
    protected $table = 'outbound';

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
        return $this->belongsTo('App\Booking', 'id ');
    }

    /**
     * belongsTo relational mapping. 
     * belongsTo flight.
     *
     * @return mixed
     */
    public function flight()
    {
        return $this->belongsTo('App\Flight', 'flight_id', 'id');
    }
}
