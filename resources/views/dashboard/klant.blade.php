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



<a href="{{$klant->id}}/edit" type="button" class="btn btn-warning">edit</a></button>


<div style="width:92%; float:right;">
      {!! Form::open([
            'method' => 'GET',
            'route' => ['dashboard.klanten.booking.create', $klant->id]
        ]) !!}
            {!! Form::submit('Boeken', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
        </div>

<p></p>
@if( !$bookings->count())
  <p> Deze klant heeft geen boeking</p>
  @else

@foreach ($bookings as $booking)
      <div class="card card-block">
  <h4 class="card-title">{{ $booking->type}}</h4>
  <p class="card-text">Korting: {{ $booking -> discount }}</p>
<a href="#" class="btn btn-primary">Details</a>
</div>

 @endforeach
@endif

</div>


@endsection
