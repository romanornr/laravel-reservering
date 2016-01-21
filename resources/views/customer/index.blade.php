@extends('layouts.master')

@section('content')
<div class="container">
  <br></br>   
<h4>Customers</h4> 
      <p></p>
      <a href="customer/create" type="button" class="btn btn-success">Create customer</a></button>
<table class="table table-bordered">
<p></p>

<div id="custom-search-input">
<div class="input-group col-md-12">
{{ Form::open(['method' => 'GET']) }}
{{ Form::input('search', 'q', null, ['class'=>'form-control','placeholder' => 'Search...'])}}
{{ Form::close() }}
</div></div>

<table class="table" id="table">
  <thead>
    <tr>
      <th>id</th>
      <th>firstname</th>
      <th>lastname</th>
      <th>gender</th>
      <th>streetname</th>
      <th>zipcode</th>
      <th>city</th>
      <th>email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($customer as $customers)
      <th scope="row">{{ $customers->id }}</th>
      <td>{{ $customers->firstname }}</td>
      <td>{{ $customers->infix  }} {{ $customers->lastname }}</td>
      <td>{{ $customers->gender }}</td>
      <td>{{ $customers->streetname}}</td>
      <td>{{ $customers->zipcode}}</td>
      <td>{{ $customers->city}}</td>
      <td>{{ $customers->email}}</td>
      <td><a href="customer/{{ $customers->id}}" type="button" class="btn btn-warning">Details</a></button></td>
    </tr>
     @endforeach
     </tbody>
</table>
{!! $customer->render() !!}
</div>

</div>


<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
@endsection
