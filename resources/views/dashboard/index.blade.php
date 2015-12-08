@extends('layouts.master')

@section('content')
                  
<div class="container">
<br></br>
      <h4>Aanvragen actief</h4>
      <p></p>

@foreach ($aanvragen as $aanvraag)
      <div class="card card-block">
  <h4 class="card-title">{{ $aanvraag->klant->voornaam}} {{ $aanvraag->klant->achternaam}} => {{ $aanvraag->onderwerp}}</h4>
  <h5 class="card-text">Bestemming: {{ $aanvraag->bestemming}}</h5>
  <p class="card-text">Aangemaakt op: {{ $aanvraag->updated_at}}</p>
<a href="#" class="btn btn-primary">Button</a>
</div>

 @endforeach
@endsection
