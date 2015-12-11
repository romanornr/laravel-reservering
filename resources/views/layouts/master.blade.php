<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Laravel</title>
<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
</head>

<body>
@show
  
      <!-- Static navbar -->
      <nav class="navbar navbar-light bg-faded">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <a class="navbar-brand" href="#">Travel</a>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Aanvragen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
            <ul class="navbar-form pull-right">
            @if(Auth::check())
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </ul>
            @else
              <a class="nav-link" href="{{ route('login') }}">Login</a>
              </ul>
       @endif
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

@if(Session::has('flash_message'))
<p></p>
  <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
  @endif

@yield('content')



  </div>

      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script>
      $('div.alert').delay(3000).slideUp(300);
  </script>
</body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

</html>