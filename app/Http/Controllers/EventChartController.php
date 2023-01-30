<?php

namespace App\Http\Controllers;

use App\Charts\EventChart;
use Illuminate\Http\Request;
use App\Event;
use DB;

class EventChartController extends Controller
{

    protected $eventsChart;
    protected $eventsPorCusto;
    private $repository;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //por enquanto esta ordenado por custo, mas precisa implementar o lucro
        //para que seja ordenado pelo mesmo
        //arrumar o id, pois n sera pelo id, mas sim de 1 em diante,
        $eventsPorCusto = Event::all()
        ->sortByDesc('custo');
        // ->take(10);
        
        //Aparentemente deu certo evento por mes. criar mais para testar, 
        //assim como fazer com que seja escrito o mes em vez da data 
        $events2 = Event::select([
            DB::raw("DATE_FORMAT(created_at, '%M') AS `date`"),
            DB::raw('COUNT(id) AS count'),
            ])
            ->orderBy('created_at')
            ->groupBy('date')
            ->pluck('count','date');

        $eventsChart = new EventChart;
        $eventsChart->labels($events2->keys());
        $eventsChart->dataset('Eventos', 'line', $events2->values())
        ->backgroundColor('rgba(106,90,205, .4)');
        return view('pages.Dashboard', compact('eventsChart','eventsPorCusto'));
        //return view('pages.create1', compact('eventsChart','eventsPorCusto'));

      
    }


    
        // $filters =  $request->all();
        // $events = $this->repository->search($request->filter);
    
        // return view('pages.Dashboard', [
        //     'events' => $events,
        //     'filters' => $filters,
        // ]);
       
        // dd($request->all());
        // $dataForm = $request->all();

        // $acoes = $acao->filtro($dataForm, $this->totalPage);

        // return view('pages.Dashboard', compact('acoes'));

    //}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
