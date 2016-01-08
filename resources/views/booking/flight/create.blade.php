@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>     
{!! Form::open([
        'route'=>['customer.flight.store',$customer->id]
        ]) !!}

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
        {!! Form::label('type', 'type:') !!}
        {!! Form::text('type',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
</div>

    <div class="form-group">
        {!! Form::label('multi-leg flight', 'multi-leg flight:') !!}
        {!! Form::select('multi_leg', ['0' => 'no','1' => 'yes'], ['class'=>'form-control','required' => 'required']) !!}
    </div>

        <div class="form-group">
        {!! Form::label('stops', 'stops:') !!}
        {!! Form::number('stops',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment', 'comment/note:') !!}
        {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection