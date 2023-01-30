@extends('layouts.app2')

@section('content2')

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
    
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>  
            <div class="info">
            <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
            <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
            <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
        </div>
        
            <div class=" ">
                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th>#(id)</th> 
                        <th>Nome do Evento</th>
                        <th>Nome do Responsavel</th>
                        <th>Area</th>
                        <th>Custo</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventsPorCusto as $eventPorCusto)
                            <tr>
                                <td>{{$eventPorCusto->id}}</td>
                                <td>{{$eventPorCusto->nomeEvento}}</td>
                                <td>{{$eventPorCusto->nomeResponsavel}}</td>
                                <td>{{$eventPorCusto->area}}</td>
                                <td>{{$eventPorCusto->custo}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    

@endsection
