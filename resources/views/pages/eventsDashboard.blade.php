@extends('layouts.app2')

@section('content2')
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Side Navigation Bar</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Analítico Acadêmico</h2>
            <ul>
                <li><a href="/inicio"> <i class="fas fa-home"></i> Inicío</li>
                <li><a href="/sobreNos"> <i class="fas fa-university"></i>Sobre Nós</li>
                <li class="">

                    <div class="dropdown show">
                        
                        <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-dice-d6"></i> Dashboard<span class="caret"></span>
                        </a>
    
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/dashboard">
                                <i class="far fa-chart-bar"></i> Relatórios
                            </a>
                            
                            <a class="dropdown-item" href="/dashboardEventos">
                                <i class="fas fa-tasks"></i>Eventos
                            </a>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="dropdown show">
                        


                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"> </i>{{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                     
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            
                            <a class="dropdown-item" href="{{ route('userProfile', Auth::user()->id)}}">
                                <i class="fas fa-address-card"></i>{{ __('Perfil de Usuário') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="fas fa-circle-notch"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </div>
                </li>
            </ul> 
        </div>
        <div class="main_content">
            <div class="header">
                <a class="btnMenu_close"><img src="{{url('imagenss/list.svg')}}" width="25" height="25"  ></a>
                <a>Dashboard Eventos</a>
                <a href="dashboardEventos/create" class="btn btn-outline-light navbar-right "> Criar Evento</a>
                
            </div>
           
            <div class="info">
                @include('extra.messages')
                <h1>Eventos</h1>
            </div>
            <hr>
            <div class="info">
                <div>
                    @if(count($events ?? '') > 0)
                        @foreach ($events ?? '' as $event)
                            @if(Auth::user()->id == $event->user_id)
                            {{--<div class="well"> --}}
                                <div class ="info">
                                <h3><a href="/dashboardEventos/{{$event->id}}">{{$event->nomeEvento}}</a></h3>
                                <small>Criado em {{$event->created_at->format("d/m/Y")}} por {{$event->user->name ?? ""}}</small>
                            </div>
                            @endif
                        @endforeach
                        {{$events ?? ''->links()}}
                    @else
                        <h6> Não há eventos.</h6>
                    @endif
                </div>
            </div>
        </div>
        {{-- <div class="main_content btnMenu_open">
           
                <ul class="">
                    <li class="btnMenu-item">
                        <a href="#menu" class="btnMenu cor">
                            <img src="{{url('imagenss/list.svg')}}" width="20" height="25" >
                        </a> 
                    </li>
                    <li class="btnMenu-item">
                        Dashboard
                    </li>
            </div>  
            <div class="info"></div>
            <div>Colocar os eventos Aqui</div> --}}
            
        
        </div>
    </div>

    </body>
    </html>
@endsection

