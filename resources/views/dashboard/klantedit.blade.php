@extends('layouts.master')

@section('content')
<div class="container">
  <br></br>     
<h4>Klanten Edit</h4>
      <p></p>
	
	{!! Form::model($klant, ['method' => 'PATCH']) !!}

	<div class="form-group">
	{!! Form::label('voornaam', 'voornaam:') !!}
	{!! Form::text('voornaam',null,['class'=>'form-control','required' => 'required']) !!}
	</div>

    <div class="form-group">
        {!! Form::label('achternaam', 'achternaam:') !!}
        {!! Form::text('achternaam',null,['class'=>'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
        {!! Form::email('email',null,['class'=>'form-control','required' => 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('telefoonnummer', 'telefoonnummer:') !!}
        {!! Form::text('telefoonnummer',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    	{!! Form::submit('Update klant', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    </div>

</div>


@endsection
