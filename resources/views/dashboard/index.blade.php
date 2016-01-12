@extends('layouts.master')

@section('content')
                  
<div class="container">
<br></br>
@if( !$aanvragen->count())
      <h5> Op dit moment zijn er geen actieve aanvragen</h5>
      @else
<h4>Aanvragen actief</h4>
      <p></p>

@foreach ($aanvragen as $aanvraag)
      <div class="card card-block">
  <h4 class="card-title">{{ $aanvraag->customer->firstname}} {{ $aanvraag->customer->achternaam}} -> {{ $aanvraag->onderwerp}}</h4>
  <h5 class="card-text">Destination: {{ $aanvraag->bestemming}}</h5>
  <p class="card-text">Created: {{ $aanvraag->created_at->diffForHumans()}}</p>
{!! Form::open([
            'method' => 'GET',
            'route' => ['travelrequest.show', $aanvraag->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('show details', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
</div>

 @endforeach
@endif
@endsection
