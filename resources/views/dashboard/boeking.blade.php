@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h4>Aanvraag</h4>
        {!! Form::open([
        'action' => 'TravelrequestController@opslaan'
        ]) !!}
        {{$klant}}

    <div class="form-group">
        {!! Form::label('onderwerp', 'onderwerp:') !!}
        {!! Form::select('onderwerp', array('algemene info' => 'algemene info', 'Informatie aanvraag tickets' => 'Informatie aanvraag tickets', 'Informatie aanvraag tours' => 'Informatie aanvraag tours', 'Informatie aanvraag hotels' => 'Informatie aanvraag hotels'), null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bestemming', 'bestemming:') !!}
        {!! Form::text('bestemming',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('aantal', 'aantal personen:') !!}
        {!! Form::text('aantal',null,['class'=>'form-control']) !!}
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
