@extends('layouts.master')

@section('content')
                  
<div class="container">
<br></br>
@if( !$aanvraag->count())
      <h5> Op dit moment zijn er geen actieve aanvragen</h5>
      @else
<h4>Aanvraag actief</h4>
      <p></p>


      <div class="card card-block">
  <h4 class="card-title">{{ $aanvraag->customer->firstname}} {{ $aanvraag->customer->achternaam}} -> {{ $aanvraag->onderwerp}}</h4>
  <h5 class="card-text">Bestemming: {{ $aanvraag->bestemming}}</h5>
    <p class="card-text">vertrek datum: {{ $aanvraag->vertrek}}</p>
    <p class="card-text">retour datum: {{ $aanvraag->terug}}</p>
  <p class="card-text">aantal personen: {{ $aanvraag->aantal}}</p>
  <p class="card-text">contact opnemen: {{ $aanvraag->aantal}}</p>
  <p class="card-text">toelichting: {{ $aanvraag->toelichting}}</p>
  <p class="card-text">created: {{ $aanvraag->created_at->diffForHumans()}}</p>

  {!! Form::open([
            'method' => 'GET',
            'route' => ['customer.show', $aanvraag->customer_id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Go to customer', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

{!! Form::open([
            'method' => 'DELETE',
            'route' => ['travelrequest.destroy', $aanvraag->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('delete request', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>

@endif
@endsection
