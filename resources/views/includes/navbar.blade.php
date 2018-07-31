<nav class="navbar ixed-top opaque-navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{ url('/') }}">
                        <img class="navbar-brand" src="{{ asset('images/logob.png') }}">
                    </a>

                </div>

                <form class="form-inline mr-auto" action="{{ route('search') }}" method="POST">
                    {{ csrf_field() }}
                    <input class="form-control opaque-navbar" value="{{ old('content') }}" name="content" type="search" placeholder="Pesquisar" aria-label="Search" >
                    <button class="btn btn-outline-info" type="submit">Ir</button>
                </form>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Registre-se</a></li>
                        @else
                            <li><a href="{{ route('home') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Olá, 
                                    {{Auth::user()->name }} <span></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('eventcreate') }}">Criar evento</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>