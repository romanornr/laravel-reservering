@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>     
{!! Form::open([
        'route'=>['booking.flight.outbound.store', $booking->id, $booking->flight_id]
        ]) !!}

<div class="row">
<div class="form-group">
        {!! Form::label('flight_number', 'flight number:') !!}
        {!! Form::text('flight_number',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
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
    </div>
    <div class="row">
    <div class="form-group">
        {!! Form::label('departure_time', 'departure time:') !!}
        {!! Form::input('datetime-local', 'departure_time', null, ['class' => 'form-control', 'placeholder' => 'Date']); !!}
    </div>

      <div class="form-group">
        {!! Form::label('arrival_time', 'arrival time:') !!}
        {!! Form::input('datetime-local', 'arrival_time', null, ['class' => 'form-control', 'placeholder' => 'Date']); !!}
    </div>

</div>

    <div class="form-group">
        {!! Form::label('is_return', 'is return:') !!}
        {!! Form::select('is_return', ['0' => 'no','1' => 'yes'], ['class'=>'form-control','required' => 'required']) !!}
    </div>
</div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection