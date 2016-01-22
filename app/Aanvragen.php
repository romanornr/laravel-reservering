<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aanvragen extends Model
{
    protected $table = 'aanvragen';
    protected $guarded = ['id'];

    //relatie

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}
