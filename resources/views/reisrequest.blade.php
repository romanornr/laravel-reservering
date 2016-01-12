@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <br>
    <h5>Aanvraag reisinformatie</h5>
        {!! Form::open([
        'action' => 'TravelrequestController@store'
        ]) !!}
<p></p>
<div class="form-group">
<div class="form-inline">
        {!! Form::radio('gender', 'male', false,['class'=>'radio']) !!} de heer
        {!! Form::radio('gender', 'female', false,['class'=>'radio', 'display'=> 'female']) !!} mevrouw
</div>
</div>
<div class="row">
    <div class="form-group">
        {!! Form::label('voornaam', 'voornaam:') !!}
        {!! Form::text('firstname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname', 'achternaam:') !!}
        {!! Form::text('lastname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
        {!! Form::email('email',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefoonnummer', 'telefoonnummer:') !!}
        {!! Form::text('telefoonnummer',null,['class'=>'form-control']) !!}
    </div>


    </div>
 <div class="row">
    <div class="form-group">
        {!! Form::label('onderwerp', 'onderwerp:') !!}
        {!! Form::select('onderwerp', array('algemene info' => 'algemene info', 'Informatie aanvraag tickets' => 'Informatie aanvraag tickets', 'Informatie aanvraag tours' => 'Informatie aanvraag tours', 'Informatie aanvraag hotels' => 'Informatie aanvraag hotels'), null, ['class'=>'form-control']) !!}
    </div>
    </div>

<div class="row">
    <div class="form-group">
        {!! Form::label('bestemming', 'bestemming:') !!}
        {!! Form::text('bestemming',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('aantal', 'aantal personen:') !!}
        {!! Form::text('aantal',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group">
        {!! Form::label('vertrek', 'vertrek:') !!}
        {!! Form::input('date', 'vertrek', null, ['class' => 'form-control', 'placeholder' => 'Date']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('terug', 'terug:') !!}
        {!! Form::input('date', 'terug', null, ['class' => 'form-control', 'placeholder' => 'Date']); !!}
    </div>
    </div>

     <div class="row">
    <div class="form-group">
        {!! Form::label('Contact', 'Contact opnemen:') !!}
        {!! Form::select('contact', array('algemene info' => 'Via email', 'Telefonisch in de ochtend' => 'Telefonisch in de ochtend', 'Telefonisch in de middag' => 'Telefonisch in de middag', 'Telefonisch na kantoor tijd' => 'Telefonisch na kantoor tijd'), null, ['class'=>'form-control']) !!}
    </div>
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
