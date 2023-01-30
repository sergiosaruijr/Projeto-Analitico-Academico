<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
        $title = "Bem-vindo ao Analítico Acadêmico";
        return view('pages.home', compact('title'));
    }

    public function about(){
        $title = "Sobre Nós";
        return view('pages.about', compact('title'));
    }

    public function teste(){
        
        return view('pages.testeVisaoGeral');
    }

    public function dashboard(){
        return view('pages.Dashboard');
    }

    public function teste2(){
        return view('pages.create1');
    }
}
