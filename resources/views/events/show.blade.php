@extends('layouts.app')

@section('content')
    <br>
    <div class="d-flex justify-content-start mb-3">
        <div class="mt-2"> 
            <a href="/dashboardEventos" class="btn btn-light"> <- Voltar</a>
        </div>
    </div>
    <div class="d-flex justify-content-between mb-3">
        <div class="mt-2"> 
            <a href="/dashboardEventos/{{$event->id}}/edit" class="btn btn-info" > Editar</a>
        </div>

        <div class="mt-2"> 
            {!! Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'DELETE']) !!}
                {{Form::submit('Remover Evento', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>

    <br>
    <h1>{{$event->nomeEvento}}</h1>
    <br>
    
    <div class="container">
        <div>
            <h4>Nome do(a) Responsável: </h4>  
            <h6>{{$event->nomeResponsavel}}</h6>
        </div>
    <hr>
        <div>
            <h4>Área: </h4>  
            <h6>{{$event->area}}</h6>
        </div>
    <hr>
        <div>
            <h4>Número de Funcionários: </h4>  
            <h6>{{$event->numeroFuncionarios}}</h6>
        </div>
    <hr>
        <div>
            <h4>Número de Participantes: </h4>  
            <h6>{{$event->numeroParticipantes}}</h6>
        </div>
    <hr>
        <div>
            <h4>Custo: </h4>  
            <h6>R$ {{$event->custo}}</h6>
        </div>
    <hr>
        <div>
            <h4>Rendimento Bruto: </h4>  
            <h6>R$ {{$event->rendimento_bruto}}</h6>
        </div>

    <hr>
        <div>
            <h4>Data de Início: </h4>
            <h6>{{date('d/m/Y', strtotime($event->dataInicio))}} </h6>
        </div>

    <hr>
        <div>
            <h4>Data de Finalização: </h4>  
            <h6>{{date('d/m/Y', strtotime($event->dataFim))}} </h6>
        </div>
    <hr>
        <div>
            <h4>Descrição: </h4>  
            <h6>{{$event->descricao}}</h6>
        </div>
    <hr>
        <small>Criado em {{$event->created_at}} </small>

    <br>
    </div>

    
    <br>
    
@endsection