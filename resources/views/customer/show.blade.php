@extends('layouts.master')

@section('content')

<div class="container">
  <br></br>     

<div class="card">
  <div class="card-header">
    Customer Personal information - {{ $customer->firstname }} {{ $customer->infix }} {{ $customer-> lastname }}
  </div>
  <div class="card-block">
    <p class="card-text">gender: {{ $customer-> gender}}</p>
    <p class="card-text">street: {{ $customer-> streetname}} {{ $customer-> housnumber}}</p>
    <p class="card-text">zipcode: {{ $customer-> zipcode}}</p>
    <p class="card-text">email: {{ $customer-> email}}</p>
    <p class="card-text">city: {{ $customer-> city}}</p>
    <p class="card-text">mobile number: {{ $customer-> mobile}}</p>
    <p class="card-text">phone nummer: {{ $customer-> phone}}</p>
    <p class="card-text">date of birth: {{ $customer-> birthday}}</p>
       {!! Form::open([
            'method' => 'GET',
            'route' => ['customer.edit', $customer->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('Update personal info', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

          {!! Form::open([
            'method' => 'DELETE',
            'route' => ['customer.destroy', $customer->id],
            'style'=>'display:inline-block'
        ]) !!}
            {!! Form::submit('delete customer', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}


  </div>
  <div class="card-footer text-muted">
    Created at {{ $customer->created_at }}
  </div>
</div>



</div>

@endsection

