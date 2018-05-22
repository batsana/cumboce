<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
              Marcacao de consultas
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>  
                @else

                



                  {{--   <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                            Casamentos <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu animated fadeInRight" role="menu">
                            <li >
                                <a href="{{ url('create') }}">
                                   Cadastrar Cidadao
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('show')  }}">
                                   Lista de Casamentos
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('create/c') }}">
                                   Novo casamento
                                </a>
                            </li>

                        </ul>
                    </li>
                    
                </li> --}}
                    {{--notification--}}
              

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                          {{--  <img alt="image"  src="/user/{{ Auth::user()->foto}} " style="width: 25px; height: 25px; border-radius: 100px;" /> --}} {{ Auth::user()->name }} <span class="caret"></span>

                        </a>

                        <ul class="dropdown-menu animated fadeInRight" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>
                                    Logout
                                </a>

                                <a href="#">
                                    Profile
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>