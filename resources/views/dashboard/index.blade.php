@extends('layouts.master')

@section('content')
                  
<div class="container">
<br></br>
      <h4>Aanvragen actief</h4>

@foreach ($aanvragen as $aanvraag)
      <div class="card card-block">
  <h4 class="card-title">Card title</h4>
  <p class="card-text">{{ $aanvraag->onderwerp}}</p>
  <p class="card-text">{{ $aanvraag->bestemming}}</p>
<a href="#" class="btn btn-primary">Button</a>
</div>

 @endforeach
@endsection
