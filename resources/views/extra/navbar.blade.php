<nav class="navbar navbar-expand-lg navbar-light opacidade-navbar" style="background-color: #FF974D;">
    <a class="navbar-brand" href="{{ url('/inicio') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
    
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/inicio">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sobreNos">Sobre</a>
          </li>
          
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="mb-2 mr-2 btn btn-info" href="{{ route('login') }}">{{ __('Login') }} </a>
                </li>
                
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="mb-2 btn btn-success" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard">
                            Dashboard
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
            @endguest
        </ul>
    </div>
</nav>
