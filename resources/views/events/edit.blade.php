@extends('layouts.app')

@section('content')
    
    <br>
    <h1>Editar Evento</h1>
    <br>
    <div class="container">

        {!! Form::open(['action' => ['EventsController@update',$event->id], 'method' => 'EVENT']) !!}
            <div class="form-group"> 
                {{Form::label('nomeEvento', 'Nome do evento: ')}}
                {{Form::text('nomeEvento', $event->nomeEvento , ['class' => 'form-control', 'placeholder' => 'Ex: Semana da Computacao'])}}
            </div>

            <div class="form-group"> 
                {{Form::label('nomeResponsavel', 'Nome do(a) Responsável: ')}}
                {{Form::text('nomeResponsavel', $event->nomeResponsavel , ['class' => 'form-control', 'placeholder' => 'Ex: Sergio Tanaka'])}}
            </div>

        <div class="form-group"> 
            {{Form::label('area', 'Área: ')}}
            {{Form::text('area', $event->area , ['class' => 'form-control', 'placeholder' => 'Ex: Ciencia da Computacao'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('numeroFuncionarios', 'Número de Funcionários: ')}}
            {{Form::text('numeroFuncionarios', $event->numeroFuncionarios , ['class' => 'form-control', 'placeholder' => 'Ex: 15'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('numeroParticipantes', 'Número de Participantes: ')}}
            {{Form::text('numeroParticipantes', $event->numeroParticipantes , ['class' => 'form-control', 'placeholder' => 'Ex: 100'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('custo', 'Custo: ')}}
            {{Form::text('custo', $event->custo , ['class' => 'form-control', 'placeholder' => 'Ex: 3000,00'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('rendimento_bruto', 'Rendimento Bruto: ')}}
            {{Form::text('rendimento_bruto', $event->rendimento_bruto , ['class' => 'form-control', 'placeholder' => 'Ex: 3000,00'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('dataInicio', 'Data de Início: ')}}
            {{Form::date('dataInicio',$event->dataInicio,['class'=>'form-control'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('dataFim', 'Data de Finalização: ')}}
            {{Form::date('dataFim',$event->dataFim,['class'=>'form-control'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('descricao', 'Descrição: ')}}
            {{Form::textarea('descricao', $event->descricao , ['class' => 'form-control', 'placeholder' => 'Ex: Descreva sobre o evento...'])}}
        </div>

        {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'PUT']) !!}
        {{Form::submit('Editar Evento', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
    <br>
    </div>    
    
@endsection
