@extends('layouts.master')

@section('content')
<div class="container">
  <br></br>     
<h4>Klantenlijst</h4>
      <p></p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
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
    </tr>
     @endforeach
     </tbody>
</table>
{!! $klanten->render() !!}
</div>


@endsection
