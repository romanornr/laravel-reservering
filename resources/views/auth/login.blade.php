@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <br></br>
      <h2>Please Login</h2>

      <form method="post" action="{{ url('/auth/login') }}">
        {!! csrf_field() !!}

        <div class="form-group">
          <label for="email">E-mail address</label>
          <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
        </div>

        <div class="checkbox">
            <label>
              <input type="checkbox" name="remember"> Onthouden
            </label>
        </div>

        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
        </div>

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> Het E-mail address of wachtwoord klopt niet.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

      </form>
@endsection
