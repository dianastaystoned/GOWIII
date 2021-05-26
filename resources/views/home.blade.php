@extends('app')

@section('content')
    <!-- Main -->
    <main class="banner" id="mainhome">
        <div id="carouselInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="images/ojo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="images/cr1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="images/cr2.jpg" class="d-block w-100" alt="...">
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
                            <h1 class="title">God of War III</h1><br>
                            <p class="d-none d-md-block">
                                “Antes de la era en la que tuvo lugar el ocaso de los dioses, una leyenda se alzó para reclamar su lugar entre ellos, y a pesar de que Kratos ascendió al trono como nuevo Dios de la Guerra, los recuerdos de su familia lo perturbaban, una familia a la que él mismo asesinó, pero las manos de la muerte no pudieron con él, las hermanas del destino no pudieron controlarlo, y en este día, el hombre, la leyenda, Kratos, saboreará su venganza.”
                            </p>
                            <a href="https://godofwar.fandom.com/es/wiki/God_of_War_III" target="_blank" class="btn btn-outline-light">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End main -->
    <!-- Principal characters -->
    <section class="mt-4" id="characters">
        <div class="container">
            <div class="row">
                <div class="col text-center" id="character">
                    <h1 class="title" style="color: rgb(255, 174, 0);">Personajes</h1>
                    <h1 class="title" style="color: rgb(255, 174, 0);">principales</h1>
                </div>
            </div>
            <div class="row">
                <div class="card-deck">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://img.ibxk.com.br/2018/04/20/20190302793802.jpg" class="card-img-top" style="width: 358px;
                      height: 260px;">
                      <div class="card-body">
                        <h5 class="card-title">Kratos</h5>
                        <p class="card-text">"¡Zeus, tu hijo ha regresado y trae consigo la destrucción del Olimpo!" -Kratos</p>
                      </div>
                      <div class="card-footer">
                        <a href="{{ url('characters') }}" type="button" class="btn btn-outline-warning">Ver más</a>
                      </div>
                    </div>
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://i.ytimg.com/vi/59ijRpWjAcI/maxresdefault.jpg" class="card-img-top" style="width: 358px;
                      height: 260px;">
                      <div class="card-body">
                        <h5 class="card-title">Zeus</h5>
                        <p class="card-text">"Hermanos, dejad de lado las absurdas disputas que nos han dividido durante tanto tiempo. Vamos a estar unidos. Y vamos a permanecer juntos. Y yo me ocuparé de exterminar a esta plaga. ¡El Olimpo vivirá siempre!" -Zeus</p>
                      </div>
                      <div class="card-footer">
                        <a href="{{ url('characters') }}" type="button" class="btn btn-outline-warning">Ver más</a>
                      </div>
                    </div>
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://i.ytimg.com/vi/fsBjVEo6r3Y/maxresdefault.jpg" class="card-img-top" style="width: 358px;
                      height: 260px;">
                      <div class="card-body">
                        <h5 class="card-title">Gaia</h5>
                        <p class="card-text">	"Soy la Titánide Gaia, la omnipresente madre Tierra. He visto cómo te convertías en un poderoso guerrero y he estado contigo a lo largo de todos los sucesos de tu vida, pero ya no podía mirar sin mas. Te ayudaré a derrotar a Zeus." -Gaia</p>
                      </div>
                      <div class="card-footer">
                        <a href="{{ url('characters') }}" type="button" class="btn btn-outline-warning">Ver más</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End characters -->
    <!-- Magic -->
    <section class="mt-4" id="magic">
        <div class="container">
              <div class="row">
                  <div class="col text-center" id="magic">
                      <h1 class="title" style="color: rgb(255, 174, 0);">Armas y</h1>
                      <h1 class="title" style="color: rgb(255, 174, 0);">magía</h1>
                  </div>
              </div>
              <div class="row">
                  <div class="card-deck">
                      <div class="card text-white bg-dark mb-3">
                        <img src="https://pm1.narvii.com/6275/6a2339a6e1fc79fbf6108450db16f18df72c6f1b_hq.jpg" class="card-img-top" style="width: 358px;
                        height: 260px;">
                        <div class="card-body">
                          <h5 class="card-title">Espadas del Exilio</h5>
                          <p class="card-text">Las Espadas del Exilio sustituyen a las Espadas de Atenea como sus armas principales, ya que éstas últimas, que recibió como Dios de la Guerra.</p>
                        </div>
                        <div class="card-footer">
                          <a href="{{ url('magic') }}" type="button" class="btn btn-outline-warning">Ver más</a>
                        </div>
                      </div>
                      <div class="card text-white bg-dark mb-3">
                        <img src="https://i.pinimg.com/originals/29/53/3e/29533e0967faa2fb6b24eb3a9aa42d8a.jpg" class="card-img-top" style="width: 358px;
                        height: 260px;">
                        <div class="card-body">
                          <h5 class="card-title">Espada del Olimpo</h5>
                          <p class="card-text">Es una gran espada de energía extremadamente poderosa que al llenarla de energía, desprende una luz azul brillante.</p>
                        </div>
                        <div class="card-footer">
                          <a href="{{ url('magic') }}" type="button" class="btn btn-outline-warning">Ver más</a>
                        </div>
                      </div>
                      <div class="card text-white bg-dark mb-3">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/f513721e-793b-4fb7-9b25-ea0c1cbb06cf/ddrzrx7-e0d896bc-c0cd-4804-9c37-8502ba839a7c.png" class="card-img-top" style="width: 358px;
                        height: 260px;">
                        <div class="card-body">
                          <h5 class="card-title">Cestus de Nemea</h5>
                          <p class="card-text">Es la única arma capaz de matar a Escorpio, como el cuerpo de la criatura es en parte Ónice.</p>
                        </div>
                        <div class="card-footer">
                          <a href="{{ url('magic') }}" type="button" class="btn btn-outline-warning">Ver más</a>
                        </div>
                      </div>
                    </div>
              </div>
          </div>
      </div>
    </section>
    <!-- End magic -->
    <!-- Contact us -->
    <section class="pt-4 pb-4" id="contact-us">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h1 style="color: rgb(255, 174, 0);">Contáctanos</h1>
            </div>
            
          </div>
          <div class="row">
            <div class="col text-center" style="color: rgb(163, 112, 0);">
              Mantenos informados acerca de la información que te gustaría ver o cualquier problema que tengas en tu fanpage de 
              <abbr title="Registrate para formar parte de esta familia">God of War III.</abbr>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">
              <form>
                <div class="col-12">
                  <input type="text" class="form-control" placeholder="Nombre">
                </div><br>
                <div class="col-12 ">
                  <input type="text" class="form-control" placeholder="Apellido">
                </div><br>
                <div class="col-12">
                  <input type="email" class="form-control" placeholder="Dirección de correo">
                </div><br>
                <div class="col">
                  <textarea name="descripcion" class="form-control" placeholder="Descripción"></textarea>
                  <small style="color: rgb(163, 112, 0);">Incluye un titulo en tu descripcion</small>
                </div>
                <div class="">
                  <div class="col form-group">
                    <button type="button" class="btn btn-outline-light w-100" data-toggle="modal" data-target="#thankModal">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    <!-- End contact -->
@endsection
