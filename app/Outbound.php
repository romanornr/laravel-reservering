<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    protected $table = 'outbound';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function flight()
    {
    	return $this->belongsTo('App\Flight','flight_id','id');
    }
}

