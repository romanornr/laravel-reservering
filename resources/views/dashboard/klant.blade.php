@extends('layouts.master')

@section('content')
<div class="container">
  <br></br>     
<h4>Klant</h4>
      <p></p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>Voornaam</th>
      <th>Achternaam</th>
      <th>email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $klant->id }}</th>
      <td>{{ $klant->voornaam }}</td>
      <td>{{ $klant->achternaam }}</td>
      <td>{{ $klant->email }}</td>
      <td>
      {!! Form::open([
            'method' => 'DELETE',
            'route' => ['dashboard.klanten.destroy', $klant->id]
        ]) !!}
            {!! Form::submit('Verwijder klant', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </td>
    </tr>
     </tbody>
</table>

      {!! Form::open([
            'method' => 'GET',
            'route' => ['dashboard.klanten.booking.create', $klant->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Boeken', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}

      {!! Form::open([
            'method' => 'GET',
            'route' => ['dashboard.klanten.edit', $klant->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Edit', ['class' => 'btn btn-warning']) !!}
        {!! Form::close() !!}

<p></p>
@if( !$bookings->count())
  <p> Deze klant heeft geen boeking</p>
  @else

@foreach ($bookings as $booking)
      <div class="card card-block">
  <h4 class="card-title">{{ $booking->type}} reis</h4>
  <p class="card-text">Korting: €{{ $booking -> discount }}</p>

  @if($booking -> paid == 1)
      <p class="card-text" style="color:green;">Betaald</p>
      @else
      <p class="card-text" style="color:red;">Niet Betaald</p>
  @endif
      {!! Form::open([
            'method' => 'POST',
            'route' => ['dashboard.klanten.booking.destroy', $booking->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('PDF/Invoice', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}

      {!! Form::open([
            'method' => 'DELETE',
            'route' => ['dashboard.klanten.booking.destroy', $booking->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Verwijder', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </div>

</div>

 @endforeach
@endif

</div>


@endsection
