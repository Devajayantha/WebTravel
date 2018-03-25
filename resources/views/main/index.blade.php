@extends('layouts/app')
@section('content')
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
@endsection