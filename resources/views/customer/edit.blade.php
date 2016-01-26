@extends('layouts.master')

@section('content')

<div class="col-sm-8">

<div class="container">
  <br></br>
  {!! Form::model($customer, [
	'method' => 'PUT',
	'route' => ['customer.update', $customer->id]
	]) !!}

	<div class="row">
    <div class="form-group">
        {!! Form::label('firstname', 'firstname:') !!}
        {!! Form::text('firstname',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('infix', 'infix:') !!}
        {!! Form::text('infix',null,['class'=>'form-control']) !!}
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

    <div class="form-group">
        {!! Form::label('email', 'email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
</div>

        <div class="form-group">
        {!! Form::label('date of birth', 'birthday') !!}
        {!! Form::date('birthday',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection
