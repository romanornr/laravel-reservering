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
    <b> {{ $bookings->id }} Outbound: {{$bookings->flight->arrival}} to {{$bookings->flight->departure}}</b>
  </div>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Flight</th>
      <th>Arrives</th>
      <th>Departs</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>{{$bookings->flight->arrival}}</td>
      <td>{{$bookings->flight->departure}}</td>
    </tr>
    <tr>
       <th scope="row">
         {!! Form::open([
            'method' => 'GET',
            'route' => ['flight.outbound.create', $bookings->flight_id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Add flight', ['class' => 'btn btn-info-outline btn-sm']) !!}
        {!! Form::close() !!}
       </th>
        </tr>
    
  </tbody>
  </table>
</table>


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
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Add passenger', ['class' => 'btn btn-success-outline btn-sm']) !!}
        {!! Form::close() !!}
        </td>
      <td> 
  </tbody>
</table>
<p></p>

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

