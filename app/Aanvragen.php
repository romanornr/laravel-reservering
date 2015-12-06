<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aanvragen extends Model
{
    protected $table = 'aanvragen';
    protected $fillable = ['klant_id','onderwerp','bestemming','aantal','vertrek','terug','toelichting'];

    //relatie
    public function klant()
    {
    	return $this->belongsTo('App\Klant','klant_id');
    }
}
