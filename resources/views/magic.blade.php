@extends('app')
@section('content')
<main class="banner" id="mainmagic">
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
            <img src="images/cr3.jpg" class="d-block w-100" alt="...">
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
                  <h1 class="title">Armas y magías</h1><br>
                  <p class="d-none d-md-block">
                      “A lo largo de la saga God of War, Kratos ha obtenido una multitud de armas, algunas otorgadas por los dioses y otras arrebatadas a la fuerza de diferentes enemigos.”
                  </p>
                  <a href="https://godofwar.fandom.com/es/wiki/Armas" target="_blank" class="btn btn-outline-light">Saber más</a>
              </div>
          </div>
      </div>
    </div>
  </div>
</main>
<br><br>
<section class="mt-4" id="magic">  
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 style="font-size: 60px; color: rgb(255, 174, 0);" >Listado de</h2> <h2 style="font-size: 60px; color: rgb(255, 174, 0);">armas y magías</h2>
            </div>
        </div>
        <div class="row">
          @foreach ($card as $cards)
            <div class="card-deck" style="width: 370px;
            height: 370px; margin-bottom: 260px; margin-rigth: 15px; margin-left: 15px; margin-top: 50px;">
                <div class="card text-white bg-dark mb-3">
                  <img src="{{$cards->imagen}}" class="card-img-top" style="width: 338px;
                  height: 260px;">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="color: rgb(255, 213, 123);">{{$cards->title}}</h5>
                    <p class="card-text">{{$cards->description}}</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Cuenta con 5 niveles de mejora</small>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br>
    </div>
</section>
@endsection