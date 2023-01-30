@extends('layouts.app')

@section('content2')
    <img src="{{url('imagenss/inicio2.jpg')}}" class="img-fluid">
    
    <div style="background-color: #FFF0E6;">
    <br>
        <h1 class="ml-4 ">Funcionalidades</h1>
        <hr>
    
        <div id="carouselSite" class="carousel slide ml-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target= "#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target= "#carouselSite" data-slide-to="1" ></li>
            </ol>

            <div class="carousel-inner" >
                <div class="carousel-item active"> 
                    <img src="{{url('imagenss/Carroussel.PNG')}}" class="img-fluid d-block">
                </div>
                <div class="carousel-item"> 
                    <img src="{{url('imagenss/carousel3.PNG')}}" class="img-fluid d-block">
                </div>
            
            </div>
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"> </span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <span class="carousel-control-next-icon"> </span>
                <span class="sr-only">Avançar </span>
            </a>
        </div>

        
    </div>

@endsection

