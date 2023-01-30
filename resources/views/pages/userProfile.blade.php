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
                        
                        <a class="dropdown-toggle" href="/dashboardEventos" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        


                        <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a>Perfil do Usuário </a>
            </div>
            <div class="info">
                @include('extra.messages')
                <div class="d-flex justify-content-between mb-3">
                    <div><h1>Informações do Usuário</h1> </div>

                    <div class=""> 
                        <a href="/perfilDoUsuario/{{$user->id}}/edit" class="btn btn-secondary" > Editar</a>
                    </div>
                </div>
        
                    <div>
                        <h4>Nome do Usuário: </h4>  
                        <h6>{{$user->name}}</h6>
                    </div>
                <hr>
                    <div>
                        <h4>E-mail:</h4>  
                        <h6>{{$user->email}}</h6>
                    </div>
                <hr>
                    <div>
                        <h4>Data de Nascimento:</h4>  
                        <h6>{{date('d/m/Y', strtotime($user->date_of_birth))}}</h6>
                    </div>
                <hr>
                    <div>
                        <h4>Endereço:</h4>  
                        <h6>{{$user->address}}</h6>
                    </div>
            </div>
                    
   
@endsection

