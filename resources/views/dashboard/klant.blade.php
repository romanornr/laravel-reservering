@extends('layouts.master')

@section('content')
<div class="container">
  <br></br>     
<h4>Klant</h4>
      <p></p>
<table class="table table-bordered">
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
      <th scope="row">{{ $klant->id }}</th>
      <td>{{ $klant->voornaam }}</td>
      <td>{{ $klant->achternaam }}</td>
      <td>{{ $klant->email }}</td>
      <td>
      {!! Form::open([
            'method' => 'DELETE',
            'route' => ['dashboard.klanten.destroy', $klant->id]
        ]) !!}
            {!! Form::submit('Verwijder klant', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </td>
    </tr>
     </tbody>
</table>

<a href="{{$klant->id}}/edit" type="button" class="btn btn-warning">edit</a></button>



</div>


@endsection
