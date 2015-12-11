@extends('layouts.master')

@section('content')
<div class="container">
  <br></br>     
<h4>Klantenlijst</h4> 
      <p></p>
      <a href="klanten/create" type="button" class="btn btn-success">Maak Klant aan</a></button>
<table class="table table-bordered">
<p></p>
  <thead>
    <tr>
      <th>id</th>
      <th>Voornaam</th>
      <th>Achternaam</th>
      <th>email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($klanten as $klant)
      <th scope="row">{{ $klant->id }}</th>
      <td>{{ $klant->voornaam }}</td>
      <td>{{ $klant->achternaam }}</td>
      <td>{{ $klant->email }}</td>
      <td><a href="klanten/{{$klant->id}}" type="button" class="btn btn-warning">Details</a></button></td>
    </tr>
     @endforeach
     </tbody>
</table>
{!! $klanten->render() !!}
</div>


@endsection
