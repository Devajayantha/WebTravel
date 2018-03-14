<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Booking Now</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
    </nav>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/gambar2.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Penida Trip</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="http://">
                            <button class="btn btn-outline-primary">BOOKING NOW</button>
                        </a>
                    </div>
                </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gambar1.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Penida Trip</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    <a href="http://">
                        <button class="btn btn-outline-primary">BOOKING NOW</button>
                    </a>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gambar2.jpg')}}" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h2>Penida Trip</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="http://">
                            <button class="btn btn-outline-primary">BOOKING NOW</button>
                        </a>
                  </div>
              </div>
              <div class="corousel-controls">
                  <ul class="carousel-ul">
                    <li>
                        <button class="btn btn-primary">BUTOON</button>
                    </li>
                  </ul>
              </div>
          </div>   
      </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>