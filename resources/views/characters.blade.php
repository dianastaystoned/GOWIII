@extends('app')
@section('content')
<main  class="banner" id="maincharacter">
  <div id="carouselInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <img src="images/kkh.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="images/kkk.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="images/kkhe.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="images/kkhr.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselInterval" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselInterval" role="button" data-slide="next">
    <span class="sr-only">Next</span>
    </a>
    <div class="overlay">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6 offset-md-3 text-center">
                  <h1 class="title">Personajes</h1><br>
                  <a href="https://godofwar.fandom.com/es/wiki/Categor%C3%ADa:Personajes#" target="_blank" class="btn btn-outline-light">Ver todos</a>
              </div>
          </div>
      </div>
    </div>
  </div>
</main>
  <br><br>
  <section class="mt-4" id="characters">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 style="font-size: 60px; color: rgb(255, 174, 0);" >Personajes</h2> <h2 style="font-size: 60px; color: rgb(255, 174, 0);">Principales</h2>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach ($characters as $character)
              <div class="card-deck" style="width: 370px;
              height: 370px; margin-bottom: 260px; margin-rigth: 15px; margin-left: 15px; margin-top: 50px;">
                  <div class="card text-white bg-dark mb-3">
                    <img src="{{$character->imagen}}" class="card-img-top" style="width: 338px;
                    height: 260px;">
                    <div class="card-body">
                      <h5 class="card-title text-center" style="color: rgb(255, 213, 123);">{{$character->title}}</h5>
                      <p class="card-text">{{$character->description}}</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Personaje importante en GOWIII</small>
                    </div>
                  </div>
              </div>
              @endforeach
          </div>
 </div>
 <br><br><br>
</section>
@endsection