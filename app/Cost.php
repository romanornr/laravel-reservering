<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    /**
     * table from cost.
     *
     * @var
     */
    protected $table = 'cost';

    /**
     * guard id, created_at and updated_at
     * protection for mass assignment vulnerability.
     *
     * @var
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * put $dates in to Carbon instances for date mutation.
     *
     * @var
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * hasMany relational mapping. 
     * hasMany booking.
     *
     * @return mixed
     */
    public function booking()
    {
        return $this->hasMany('App\Booking', 'cost_id', 'id');
    }
}
