@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h4>Aanvraag</h4>
        {!! Form::open([
        'action' => 'KlantController@store'
        ]) !!}

    <div class="form-group">
   		{!! Form::radio('geslacht', 'man',['class'=>'form-control']) !!} de heer
		{!! Form::radio('geslacht', 'vrouw',['class'=>'form-control']) !!} mevrouw
	</div>

    <div class="form-group">
        {!! Form::label('voornaam', 'voornaam:') !!}
        {!! Form::text('voornaam',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('achternaam', 'achternaam:') !!}
        {!! Form::text('achternaam',null,['class'=>'form-control','required' => 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
        {!! Form::email('email',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefoonnummer', 'telefoonnummer:') !!}
        {!! Form::text('telefoonnummer',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Verzend', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}



 
@endsection
