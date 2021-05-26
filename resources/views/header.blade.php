<!-- HEADER -->
<header>
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="{{ route('ini') }}">Inicio</a></li>
                <li><a href="{{ url('magic') }}">Armas y Magía</a></li>
                <li><a href="{{ url('characters') }}">Personajes</a></li>
                <li><a href="{{ route('game') }}">Juego</a></li>
                <li><a href="#contact-us">Contacto</a></li>
                @guest
                  <li>
                    <a href="{{ route('login') }}">{{ __('Entrar') }}</a>
                  </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>
                @endif
                @else
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <div class="icon menu-btn">
              <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
</header>
<!-- /HEADER -->
<!-- SCRIPTS HEADER-->
<script>
    const body = document.querySelector("header");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
<!-- SCRIPTS HEADER-->