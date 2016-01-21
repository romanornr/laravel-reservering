@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>     
{!! Form::open([
        'route'=>['booking.cost.store',$booking->id]
        ]) !!}

  <div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('reservation',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"Reservation cost"]) !!}
  <span class="input-group-addon"></span>
 </div>


  <div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('land_arrangement',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"land arrangement cost"]) !!}
  <span class="input-group-addon"></span>
 </div>

   <div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('travel_insurance',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"travel insurance"]) !!}
  <span class="input-group-addon"></span>
 </div>

<div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('travel_cancelation_insurance',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"travel cancelation insurance cost"]) !!}
  <span class="input-group-addon"></span>
 </div>

<div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('tax',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"tax cost"]) !!}
  <span class="input-group-addon"></span>
 </div>

<div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('fee',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"fee cost"]) !!}
  <span class="input-group-addon"></span>
 </div>

<div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('fare',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"fare cost"]) !!}
  <span class="input-group-addon"></span>
 </div>

<div class="input-group">
  <span class="input-group-addon">€</span>
        {!! Form::number('discount',null,['class'=>'form-control','required' => 'required', 'step' => '0.01', 'placeholder' =>"discount"]) !!}
  <span class="input-group-addon"></span>
 </div>

<br></br>

  <label class="c-input c-radio">
        {!! Form::radio('paid', '0', false,['class'=>'radio']) !!} <span class="c-indicator"></span>Not paid</label>
  <label class="c-input c-radio">
        {!! Form::radio('paid', '1', false,['class'=>'radio']) !!} <span class="c-indicator"></span>Paid</label>

<br></br>
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>


@endsection