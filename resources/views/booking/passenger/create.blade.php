@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>     
{!! Form::open([
        'route'=>['booking.passenger.store',$booking->id]
        ]) !!}
<div class="row">
    <div class="form-group">
        {!! Form::label('firstname', 'firstname:') !!}
        {!! Form::text('firstname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'lastname:') !!}
        {!! Form::text('lastname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
</div>

<div class="form-group">
<div class="form-inline">
        {!! Form::radio('gender', 'male', false,['class'=>'radio']) !!} male
        {!! Form::radio('gender', 'female', false,['class'=>'radio', 'display'=> 'female']) !!} female
</div>
</div>

    <div class="form-group">
        {!! Form::label('date of birth', 'birthday') !!}
        {!! Form::text('birthday',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection