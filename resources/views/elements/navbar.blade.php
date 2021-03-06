<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" id="mainNavbar">
    @guest
    <a class="navbar-brand" href="#">Auth</a>
    @else
    <a class="navbar-brand" href="/profile">{{ Auth::user()->name }}</a>
    @endguest
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbar">
           
            <ul class="navbar-nav mr-auto">
                 @guest
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="/">
                        Inicio
                    </a>
                </li>
                @else
                 <li id="initial" class="nav-item">
                    <a class="nav-link" href="/">
                        Inicio
                    </a>
                </li>
                <li id="initial" class="nav-item">
                     <a class="nav-link" href="/sendMessage">
                            <i class="fa fa-sign-in"></i>
                            Enviar Mensaje
                        </a>
                </li>
                <li id="initial" class="nav-item">
                     <a class="nav-link" href="/message" >
                            <i class="fa fa-sign-in"></i>
                            Mensaje
                        </a>
                </li>
                @endguest
            </ul>
            @guest
            <ul class="navbar-nav navbar-right ">
                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        Idioma
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Euskara</a>
                        <a class="dropdown-item active" href="#">Castellano</a>
                      </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/login"  data-target="#loginModal">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/register"  data-target="#registerModal">
                            <i class="fa fa-user-plus"></i>
                            Registro
                        </a>
                    </li>

                <!-- Authentication Links -->

                @else
                    <li class="nav-item dropdown" style='list-style:none;'>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Perfil') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </ul>
                @endguest
        </div>
    </div>
</nav>
