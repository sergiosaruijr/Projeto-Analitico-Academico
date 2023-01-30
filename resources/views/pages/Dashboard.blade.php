@extends('layouts.app2')

@section('content2')
    
    <!DOCTYPE html>
    <html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Side Navigation Bar</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body>

    <div class="wrapper">
        <div class="sidebar ">
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
                <a>Dashboard</a>

            </div>

            <div class="info" >
                <div>
                    {!! $eventsChart ->container() !!}
                    {!! $eventsChart ->script() !!}
                </div>
            </div>
            
            <div class="info">
                <table class="table table-striped " id="idTable">
                    <h3> Eventos em Destaque</h3>
                    <hr>
                    <br>
                    <h3> Eventos em Geral</h3>
                    <h5 class=" ui dividing">Filtros</h5>
                    <hr>
                    {{-- <div class="panel-body">
                        <form method="POST" id="search-form" class="form-inline" role="form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="search name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="search email">
                            </div>
                
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div> --}}
                   

                    <thead>
                    <tr>
                        <th>Nome do Evento</th>
                        <th>Nome do Responsável</th>
                        <th>Área</th>
                        <th>Rendimento Bruto</th>
                        <th>Data de Inicio</th>
                        <th>Data de Fim</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventsPorCusto as $eventPorCusto)
                            <tr>
                                <td>{{$eventPorCusto->nomeEvento}}</td>
                                <td>{{$eventPorCusto->nomeResponsavel}}</td>
                                <td>{{$eventPorCusto->area}}</td>
                                <td>R$ {{$eventPorCusto->rendimento_bruto}}</td>
                                <td>{{$eventPorCusto->dataInicio}}</td>
                                <td>{{$eventPorCusto->dataFim}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nome do Evento</th>
                            <th>Nome do Responsável</th>
                            <th>Área</th>
                            <th>Rendimento Bruto</th>
                            <th>Data Inicio</th>
                            <th>Data Fim</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script> 
        $(document).ready(function() {
            $('#idTable').DataTable( {
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Nenhum Registro Encontrado",
                    "sSearch": "Pesquisar :",
                    "info": "Mostrando Página de _PAGES_",
                    "infoEmpty": "Nenhum registro Disponível",
                    "infoFiltered": "(filtrado de MAX registro no total)",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                	}
                }
            });
        } );
    </script>
    </body>
    </html>
@endsection
