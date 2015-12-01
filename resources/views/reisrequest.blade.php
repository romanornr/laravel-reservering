@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h4>Aanvraag</h4>
<<<<<<< HEAD
<<<<<<< HEAD
        {!! Form::open(['url' => 'travelrequest']) !!}
=======
        {!! Form::open(['url' => '']) !!}
>>>>>>> c46c50ec88365d005aeec17365b19adb3ae165d0
=======
        {!! Form::open(['url' => '']) !!}
>>>>>>> c46c50ec88365d005aeec17365b19adb3ae165d0

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
    <div class="form-group">
        {!! Form::label('telefoonnummer', 'telefoonnummer:') !!}
        {!! Form::text('telefoonnummer',null,['class'=>'form-control']) !!}
    </div>

    </div>
    <div class="form-group">
        {!! Form::label('onderwerp', 'onderwerp:') !!}
        {!! Form::select('onderwerp', array('algemene info' => 'algemene info', 'Informatie aanvraag tickets' => 'Informatie aanvraag tickets', 'Informatie aanvraag tours' => 'Informatie aanvraag tours', 'Informatie aanvraag hotels' => 'Informatie aanvraag hotels'), null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bestemming', 'bestemming:') !!}
        {!! Form::text('bestemming',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('aantal personen', 'aantal personen:') !!}
        {!! Form::text('aantal personen',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('vertrek', 'vertrek:') !!}
        {!! Form::input('date', 'vertrek', null, ['class' => 'form-control', 'placeholder' => 'Date']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('terug', 'terug:') !!}
        {!! Form::input('date', 'vertrek', null, ['class' => 'form-control', 'placeholder' => 'Date']); !!}
    </div>


    <div class="form-group">
        {!! Form::label('toelichting', 'toelichting:') !!}
        {!! Form::textarea('toelichting',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Verzend', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}



 
@endsection
