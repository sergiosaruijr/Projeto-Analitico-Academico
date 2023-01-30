<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Table Name
    protected $table = 'events';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }


    // public function search($filter = null)
    // {
    //     $results = $this->where(function ($query) use ($filter) {
    //         if ($filter) {
    //             $query->where('nomeEvento', 'LIKE' , "%($filter)%" );
    //         }
    //     })->toSql();
    //     // ->paginate();

    //     dd($results);
    // }

    // return $this->where(function($query) use ($data) {
    //     if(isset($data['nomeEvento']))
    //     $query->where('nomeEvento', $data['nomeEvento']);
        
    //     if(isset($data['nomeResponsavel']))
    //         $query->where('nomeResponsavel', $data['nomeResponsavel']);      

    //     if(isset($data['area']))
    //     $query->where('area', $data['area']);

    //     if(isset($data['rendimento_bruto']))
    //     $query->where('rendimento_bruto', $data['rendimento_bruto']);
    // })
    // ->paginate($totalPage);
}

