<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table = 'cost';
    protected $guarded = ['id','created_at','updated_at'];
	protected $dates = ['created_at', 'updated_at'];
	
    public function booking()
    {
    	return $this->hasMany('App\Booking','cost_id','id');
    }
}
