<?php

namespace App\Http\Controllers;
use App\Http\Requests\EventsRequest;
use Illuminate\Http\Request;
use App\Event;
use App\User;
use DB;
use Carbon\Carbon;


class EventsController extends Controller
{

    protected $totalPage;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Visualizacao do Dashboard do Gestor
        $events = Event::orderBy('created_at','desc')->paginate(10);
        return view('pages.eventsDashboard')->with('events', $events);
        
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // return view('pages.testeInicio')->with('events',$user->events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\EventsRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventsRequest $request)
    {

        //Create Event
        $event = new Event;
        $event->nomeEvento = $request->input('nomeEvento');
        $event->nomeResponsavel = $request->input('nomeResponsavel');
        $event->area = $request->input('area');
        $event->numeroFuncionarios = $request->input('numeroFuncionarios');
        $event->numeroParticipantes = $request->input('numeroParticipantes');
        $event->custo = $request->input('custo');
        $event->rendimento_bruto = $request->input('rendimento_bruto');
        $event->dataInicio = $request->input('dataInicio');
        $event->dataFim = $request->input('dataFim');
        $event->descricao = $request->input('descricao');
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/dashboardEventos')->with('success', 'Evento Criado');
    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\EventsRequest;  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventsRequest $request, $id)
    {
        //Edit Event
        $event = Event::find($id);
        $event->nomeEvento = $request->input('nomeEvento');
        $event->nomeResponsavel = $request->input('nomeResponsavel');
        $event->area = $request->input('area');
        $event->numeroFuncionarios = $request->input('numeroFuncionarios');
        $event->numeroParticipantes = $request->input('numeroParticipantes');
        $event->custo = $request->input('custo');
        $event->rendimento_bruto = $request->input('rendimento_bruto');
        $event->dataInicio = $request->input('dataInicio');
        $event->dataFim = $request->input('dataFim');
        $event->descricao = $request->input('descricao');
        $event->save();

        return redirect('/dashboardEventos')->with('success', 'Evento Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/dashboardEventos')->with('success','Evento Removido');
    }

    public function search(Request $request)
    {

        $filter = $request->query('filter');
        if (!empty($filter)) {
            $events = Event::select()
                ->where('nomeEvento', 'like', '%'.$filter.'%');
                // ->paginate(5);
        } else {
            $events = Event::all();
                // ->paginate(5);
        }
        return view('pages.Dashboard')->with('events',
         $events)->with('filter', $filter);
    }

    public function indexDatatables()
    {
        return view('pages.testeVisaoGeral');
    }

    public function getAdvanceFilter()
    {
        return view('pages.testeVisaoGera');
    }

    public function getAdvanceFilterData(Request $request)
    {
        $users = User::select([
            DB::raw("CONCAT(users.id,'-',users.id) as id"),
            'users.name',
            'users.email',
            DB::raw('count(posts.user_id) AS count'),
            'users.created_at',
            'users.updated_at'
        ])->leftJoin('posts', 'posts.user_id', '=', 'users.id')
        ->groupBy('users.id');

        // having count search
        if ($post = $datatables->request->get('post')) {
            $users->having('count', $datatables->request->get('operator'), $post);
        }

        // additional users.name search
        if ($name = $datatables->request->get('name')) {
            $users->where('users.name', 'like', "$name%");
        }

        $datatables =  app('datatables')->of($users)
            ->filterColumn('users.id', 'whereRaw', "CONCAT(users.id,'-',users.id) like ? ", ["$1"]);

        return $datatables->make(true);
    }
    
}
