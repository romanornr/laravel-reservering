<?php 

namespace App\Repositories\Outbound;

interface OutboundRepository {

	public function addBookingDetail($request, $id);
	
}