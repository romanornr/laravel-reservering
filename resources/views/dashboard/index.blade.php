@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>Admin Panel</h3><br>
      <h4>Aanvragen actief</h4>
     	@foreach ($aanvragen as $aanvraag)
    			<li>{{ $aanvraag->onderwerp }}</li>
    			<li>{{ $aanvraag->klant_id }}</li>
    			<li>{{ $aanvraag->bestemming }}</li>
    			<li>{{ $aanvraag->aantal}}</li>
    			<li>{{ $aanvraag->vertrek}}</li>
    			<li>{{ $aanvraag->terug}}</li>
    			<li>{{ $aanvraag->toelichting }}</li>
    			<li>{{ $aanvraag->updated_at }}</li>
    			<br>
    	@endforeach
 
@endsection
