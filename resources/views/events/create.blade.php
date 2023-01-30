@extends('layouts.app')

@section('content')
<br>
    <a class="btn btn-light" href="/dashboardEventos"><- Voltar</a>
    <br>
    <h1>Criar Evento</h1>
    <div class="container">

        {!! Form::open(['action' => 'EventsController@store', 'method' => 'EVENT']) !!}
            <div class="form-group"> 
                {{Form::label('nomeEvento', 'Nome do evento: ')}}
                {{Form::text('nomeEvento', '' , ['class' => 'form-control', 'placeholder' => 'Ex: Semana da Computacao'])}}
            </div>

            <div class="form-group"> 
                {{Form::label('nomeResponsavel', 'Nome do(a) Responsável: ')}}
                {{Form::text('nomeResponsavel', '' , ['class' => 'form-control', 'placeholder' => 'Ex: Sergio Tanaka'])}}
            </div>

        <div class="form-group"> 
            {{Form::label('area', 'Área: ')}}
            {{Form::text('area', '' , ['class' => 'form-control', 'placeholder' => 'Ex: Ciencia da Computacao'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('numeroFuncionarios', 'Número de Funcionários: ')}}
            {{Form::text('numeroFuncionarios', '' , ['class' => 'form-control', 'placeholder' => 'Ex: 15'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('numeroParticipantes', 'Número de Participantes: ')}}
            {{Form::text('numeroParticipantes', '' , ['class' => 'form-control', 'placeholder' => 'Ex: 100'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('custo', 'Custo: ')}}
            {{Form::text('custo', '' , ['class' => 'form-control', 'placeholder' => 'Ex: 3000,00'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('rendimento_bruto', 'Rendimento Bruto: ')}}
            {{Form::text('rendimento_bruto', '' , ['class' => 'form-control', 'placeholder' => 'Ex: 3000,00'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('dataInicio', 'Data de Início: ')}}
            {{Form::date('dataInicio','',['class'=>'form-control'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('dataFim', 'Data de Finalização: ')}}
            {{Form::date('dataFim','',['class'=>'form-control'])}}
        </div>

        <div class="form-group"> 
            {{Form::label('descricao', 'Descrição: ')}}
            {{Form::textarea('descricao', '' , ['class' => 'form-control', 'placeholder' => 'Ex: Descreva sobre o evento...'])}}
        </div>
        {{Form::submit('Criar Evento', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
    <br>
    </div>    
    
@endsection
