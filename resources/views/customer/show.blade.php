@extends('layouts.master')

@section('content')

<div class="container">
  <br></br>     

<div class="card">
  <div class="card-header">
    {{ $customer->firstname }} {{ $customer->infix }} {{ $customer-> lastname }} - Personal information 
  </div>
  <div class="card-block">
    <p class="card-text">gender: {{ $customer-> gender}}</p>
    <p class="card-text">street: {{ $customer-> streetname}} {{ $customer-> housnumber}}</p>
    <p class="card-text">zipcode: {{ $customer-> zipcode}}</p>
    <p class="card-text">email: {{ $customer-> email}}</p>
    <p class="card-text">city: {{ $customer-> city}}</p>
    <p class="card-text">mobile number: {{ $customer-> mobile}}</p>
    <p class="card-text">phone nummer: {{ $customer-> phone}}</p>
    <p class="card-text">date of birth: {{ $customer-> birthday}}</p>


        {!! Form::open([
            'method' => 'GET',
            'route' => ['customer.flight.create', $customer->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Create booking', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}

       {!! Form::open([
            'method' => 'GET',
            'route' => ['customer.edit', $customer->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Update personal info', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

          {!! Form::open([
            'method' => 'DELETE',
            'route' => ['customer.destroy', $customer->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('delete customer', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

  </div>
  <div class="card-footer text-muted">
    Created at {{ $customer->created_at->format('d-m-Y H:i:s') }}
    </div>
    </div>
<br></br>


@if( !$booking->count())
    This customer has no bookings
@else
@foreach ($booking as $bookings)
<div class="card">
  <div class="card-header">
    <b> {{ $bookings->id }}{{$bookings->flight_id}} Outbound: {{$bookings->flight->departure}} to {{$bookings->flight->arrival}} &nbsp</b>
            {!! Form::open([
            'method' => 'DELETE',
            'route' => ['customer.flight.destroy', $bookings->id, $bookings->flight_id],
            'style'=>'display:inline-block']) !!}
            {!! Form::submit('Delete booking', ['class' => 'btn btn-danger-outline btn-sm']) !!}
             {!! Form::close() !!}
  </div>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Flight number</th>
      <th>Departs</th>
      <th>Time</th>
      <th>Arrives</th>
      <th>Time</th>
      <th>Edit/Delete</th>

    </tr>
  </thead>
  <tbody>
@foreach($bookings->outbound as $outbounds)
    @if( $outbounds->is_return == 0)
    <tr>
      <th scope="row">{{$outbounds->flight_number}}</th>
      <td> {{$outbounds->departure}}        </td>
      <td> {{$outbounds->departure_time}}   </td>
      <td> {{$outbounds->arrival}}          </td>
      <td> {{$outbounds->arrival_time}}     </td>
      <td> {!! Form::open([
            'method' => 'DELETE',
            'route' => ['booking.flight.outbound.destroy', $outbounds->id, $bookings->id, $bookings->flight_id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Delete flight', ['class' => 'btn btn-danger-outline btn-sm']) !!}
        {!! Form::close() !!}
        </td>
    </tr>
    @endif
@endforeach
    <tr>
       <th scope="row">
         {!! Form::open([
            'method' => 'GET',
            'route' => ['booking.flight.outbound.create', $bookings->id, $bookings->flight_id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Add flight', ['class' => 'btn btn-info-outline btn-sm']) !!}
        {!! Form::close() !!}
       </th>
        </tr>
    
  </tbody>
  </table>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th>Flight number</th>
      <th>Departs</th>
      <th>Time</th>
      <th>Arrives</th>
      <th>Time</th>
      <th>Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookings->outbound as $outbounds)
    @if( $outbounds->is_return == 1)
    <tr>
      <th scope="row">{{$outbounds->flight_number}}</th>
      <td> {{$outbounds->departure}}        </td>
      <td> {{$outbounds->departure_time}}   </td>
      <td> {{$outbounds->arrival}}          </td>
      <td> {{$outbounds->arrival_time}}     </td>
      <td> {!! Form::open([
            'method' => 'DELETE',
            'route' => ['booking.flight.outbound.destroy', $outbounds->id, $bookings->id, $bookings->flight_id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Delete flight', ['class' => 'btn btn-danger-outline btn-sm']) !!}
        {!! Form::close() !!}
        </td>
        </tr>
        @endif
        @endforeach
    </tbody></table>

<div class="card-footer text-muted">Passengers</div>
<table class="table table-sm">
  <thead>
    <tr>
    <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>gender</th>
      <th>born</th>
      <th>Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"></th>
      <td> {{ $bookings->customer->firstname }}</td>
      <td> {{ $bookings->customer->infix }} {{ $bookings->customer->lastname }}</td>
      <td> {{ $bookings->customer->gender }}</td>
      <td> {{ $bookings->customer->birthday }}</td>
    </tr>
  @foreach ($bookings->passenger as $passengers)
    <tr>
    <th scope="row"></th>
      <td> {{ $passengers-> firstname }}</td>
      <td> {{ $passengers-> lastname }}</td>
      <td> {{ $passengers-> gender }}</td>
      <td> {{ $passengers-> birthday }}</td>
      <td> 
{!! Form::open([
            'method' => 'DELETE',
            'route' => ['booking.passenger.destroy', $passengers->id, $bookings->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('delete customer', ['class' => 'btn btn-danger-outline btn-sm']) !!}
        {!! Form::close() !!}
        </td>

    </tr>
    @endforeach
    <th scope="row"></th>
      <td>  {!! Form::open([
            'method' => 'GET',
            'route' => ['booking.passenger.create', $bookings->id],
            'style'=>'display:inline-block']) !!}

            {!! Form::submit('Add passenger', ['class' => 'btn btn-success-outline btn-sm']) !!}
            {!! Form::close() !!}
        </td>
      <td> 
  </tbody>
</table>
<p></p>


<div class="card-footer text-muted">Cost</div>
<div class="card-block">@if( !is_null($bookings->cost_id))
<p class="card-text"> Reservation: € {{$bookings->cost->reservation}} &nbsp &nbsp land arrangment: € {{$bookings->cost->reservation}} 
&nbsp &nbsp travel insurrance: € {{$bookings->cost->travel_insurrance}} 
&nbsp &nbsp cancelation_insurrance: € {{$bookings->cost->travel_cancelation_insurrance}}
&nbsp &nbsp Tax: € {{$bookings->cost->tax}}
&nbsp &nbsp fee: € {{$bookings->cost->fee}}
&nbsp &nbsp fare: € {{$bookings->cost->fare}}
&nbsp &nbsp discount: € {{$bookings->cost->discount}}
</p>
<p class="card-text">@if ($bookings->cost->paid == 1)
status: <font face="verdana" color="green">Paid </font></p>
@else
status: <font face="verdana" color="red">Not paid</font></p>
@endif
@else
{!! Form::open(['method' => 'GET',
                'route' => ['booking.cost.create', $bookings->id],
                'style'=>'display:inline-block']) !!}
                {!! Form::submit('Add cost', ['class' => 'btn btn-success-outline btn-sm']) !!}
{!! Form::close() !!}
@endif

</div>

<div class="card-footer text-muted">Extra info</div>
<div class="card-block">
    <p class="card-text">Type: {{$bookings->flight->type}} &nbsp &nbsp Multi_leg:{{$bookings->flight->multi_leg}} &nbsp &nbsp stops: {{$bookings->flight->stops}}</p>
    <p class="card-text">comment: {{$bookings->flight->comment}}</p>
    </div>

<div class="card-footer text-muted">{{ $bookings->created_at->format('d-m-Y H:i:s') }}</div>
</div>


<br>

@endforeach
@endif
<br></br>

@endsection

