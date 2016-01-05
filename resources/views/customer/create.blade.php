@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>     
        {!! Form::open([
        'method' => 'POST',
        'route' => ['customer.store'],
        'style'=>'display:inline-block'
        ]) !!}

    <div class="form-group">
   		{!! Form::radio('gender', 'male',['class'=>'form-control']) !!} male
		{!! Form::radio('gender', 'female',['class'=>'form-control']) !!} female
	</div>

<div class="row">
    <div class="form-group">
        {!! Form::label('firstname', 'firstname:') !!}
        {!! Form::text('firstname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('infix', 'infix:') !!}
        {!! Form::text('infix',null,['class'=>'form-control','required' => 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('lastname', 'lastname:') !!}
        {!! Form::text('lastname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

</div>

<div class="row">
    <div class="form-group">
        {!! Form::label('streetname', 'streetname:') !!}
        {!! Form::text('streetname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

        <div class="form-group">
        {!! Form::label('housnumber', 'housnumber') !!}
        {!! Form::text('housnumber',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group">
        {!! Form::label('zipcode', 'zipcode') !!}
        {!! Form::text('zipcode',null,['class'=>'form-control','id'=> 'triggerfield']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'city') !!}
        {!! Form::text('city',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">
        <div class="form-group">
        {!! Form::label('mobile', 'mobile') !!}
        {!! Form::text('mobile',null,['class'=>'form-control']) !!}
    </div>

        <div class="form-group">
        {!! Form::label('phone', 'phone') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>
</div>

        <div class="form-group">
        {!! Form::label('date of birth', 'birthday') !!}
        {!! Form::text('birthday',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Verzend', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection
