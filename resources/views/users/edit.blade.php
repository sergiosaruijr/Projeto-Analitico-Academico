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
                <li><a href="/inicio"><i class="fas "></i>Inicío</a></li>
                <li><a href="/sobreNos"><i class="fas "></i>Sobre Nós</a></li>
                <li><a href="/dashboard"><i class="fas "></i>Dashboard</a></li>
                <li class="">
                    <div class="dropdown show">
                        


                        <a class=" ml-4 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                     
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            
                            <a class="dropdown-item" href="{{ route('userProfile', Auth::user()->id)}}">
                                {{ __('Perfil de Usuário') }}
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
                <div class="d-flex justify-content-between mb-3">
                    <div><h1>Informações do Usuário</h1> </div>
                </div>
                
                <div class="container">

                    {!! Form::open(['action' => ['UsersController@update',$user->id], 'method' => 'EVENT']) !!}
                        <div class="form-group"> 
                            {{Form::label('name', 'Nome do Usuário: ')}}
                            {{Form::text('name', $user->name , ['class' => 'form-control', 'placeholder' => 'Ex: Sergio Sarui'])}}
                        </div>
            
                        <div class="form-group"> 
                            {{Form::label('email', 'E-mail: ')}}
                            {{Form::text('email', $user->email , ['class' => 'date form-control', 'placeholder' => 'Ex: Sergiosaruijr@gmail.com'])}}
                        </div>

                        <div class="form-group"> 
                            {{Form::label('date_of_birth', 'Data de Nascimento: ')}}
                            {{Form::date('date_of_birth',$user->date_of_birth,['class'=>'form-control'])}}
                        </div>
            
                        <div class="form-group"> 
                            {{Form::label('address', 'Endereço: ')}}
                            {{Form::text('address', $user->address , ['class' => 'form-control', 'placeholder' => 'Ex: Rua Piaui 1386'])}}
                        </div>
            
                    {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'PUT']) !!}
                    {{Form::submit('Salvar Edição', ['class' => 'btn btn-primary'])}}
            
                    {!! Form::close() !!}
                <br>
                </div>    
            </div>
                    
   
@endsection

