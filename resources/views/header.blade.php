<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="Scotch">

	<title>@yield('title')</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">

</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Programming World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a style="font-size: 20px;font-weight: 600;" class="nav-link" href="{{ route('statistic.index') }}">Popularity ratings</a>
            </li>
            
            <li class="nav-item dropdown">
                <a style="font-size: 20px; font-weight: 600;"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    List of Languages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link" href="{{ url('/language/java') }}">Java</a>
                    <a class="nav-link" href="{{ url('/language/c') }}">C</a>
                    <a class="nav-link" href="{{ url('/language/python') }}">Python</a>
                    <a class="nav-link" href="{{ url('/language/c++') }}">C++</a>
                    <a class="nav-link" href="{{ url('/language/javascript') }}">JavaScript</a>
                </div>
            </li>
        </ul>
        @if (Route::has('login'))
            <div class="top-right links">
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a style="width: 60px; font-size: 20px;font-weight: 600;" class="nav-link" href="{{ route('talk.create') }}">Talk</a>
            </li>
                @auth
                    Welcome, <b>{{  Auth::user()->name }}</b>
                    (<a style="color: black;"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>)
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a style="background-color: lightgrey; color: black; padding: 4px; font-size: 20px; margin-right: 5px;" href="{{ route('login') }}">Login</a>
                    <a style="background-color: lightgrey; color: black; padding: 4px; font-size: 20px;"href="{{ route('register') }}">Register</a>
                @endauth

            </div>
        @endif
    </div>
</nav>