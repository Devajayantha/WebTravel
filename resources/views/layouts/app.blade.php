<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link rel="shortcut icon" href="{{('img/logo-icon.jpg')}}">
    <title>Penida Trip | Tour and Travel</title>
</head>
<body>
    <nav class="navbar">
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <a href="http://">
            <img class="logo-brand" src="{{ asset('img/logo-baru.jpg') }}">
        </a>
        <ul class="ul-navbar">
            <li><a href="/">Home</a></li>
            <li><a href="#">Book Now</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact</a></li>
            @guest
                <li class="float-md-right"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li class="float-md-right"><a href="{{ route('register') }}">{{ __('Sign Up') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>

                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </nav>
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>