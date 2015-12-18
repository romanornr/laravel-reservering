<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['klant_id','onderwerp','bookingDate','DepartureDate','type','discount','paid'];

    public function klant()
    {
    	return $this->belongsTo('App\Klant','klant_id');
        
        $aanvragen = new Aanvragen([
        'onderwerp' => $request->get('onderwerp'),
        'bestemming' => $request->get('bestemming'),
        'aantal' => $request->get('aantal'),
        'vertrek' => $request->get('vertrek'),
        'terug' => $request->get('terug'),
        'toelichting' => $request->get('toelichting')
        ]);

        $klant->aanvragen()->save($aanvragen);
        \Session::flash('flash_message', 'Uw aanvraag is verzonden en er word zo snel mogelijk contact met u opgenomen!');
    }
}
