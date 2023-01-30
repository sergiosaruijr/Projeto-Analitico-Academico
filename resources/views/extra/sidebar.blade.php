<div class="wrapper">
    <div class="sidebar ">
        <h2>Analítico Acadêmico</h2>
        <ul>
            <li><a href="/inicio"><i class="fas "></i>Inicío</a></li>
            <li><a href="/sobreNos"><i class="fas "></i>Sobre Nós</a></li>
            <li class="">
                <div class="dropdown">
                    <a class=" ml-4 dropdown-toggle" href="/dashboardEventos" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard<span class="caret"></span>
                    </a>

                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/dashboardEventos">
                            Eventos
                        </a>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="dropdown">

                    <a class=" ml-4 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                 
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>
            </li>
            
        </ul> 
    </div>
</div>