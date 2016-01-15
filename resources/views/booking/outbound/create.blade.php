@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>     
{!! Form::open([
        'route'=>['customer.flight.store',$customer->id]
        ]) !!}

<div class="form-group">
        {!! Form::label('flight_number', 'flight number:') !!}
        {!! Form::text('flight_number',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

<div class="row">
    <div class="form-group">
        {!! Form::label('departure', 'departure:') !!}
        {!! Form::text('departure',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('arrival', 'arrival:') !!}
        {!! Form::text('arrival',null,['class'=>'form-control','required' => 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('is_return', 'is_return:') !!}
        {!! Form::select('is_return', ['0' => 'no','1' => 'yes'], ['class'=>'form-control','required' => 'required']) !!}
    </div>
</div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection