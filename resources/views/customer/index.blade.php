@extends('layouts.master')

@section('content')

<div class="container">
  <br></br>   
<h4>Customer list</h4> 
      <p></p>
      <a href="klanten/create" type="button" class="btn btn-success">Maak Klant aan</a></button>
<table class="table table-bordered">
<p></p>
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
      <td>{{ $customers->lastname }}</td>
      <td>{{ $customers->gender }}</td>
      <td>{{ $customers->streetname}}</td>
      <td>{{ $customers->zipcode}}</td>
      <td>{{ $customers->city}}</td>
      <td>{{ $customers->email}}</td>
      <td><a href="" type="button" class="btn btn-warning">Details</a></button></td>
    </tr>
     @endforeach
     </tbody>
</table>
{!! $customer->render() !!}
</div>

</div>

@endsection
