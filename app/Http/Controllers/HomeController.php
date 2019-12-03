<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\quarto;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Quarto $quarto)
    {
        $quartos = $quarto->all();

        $qtdquartos = $quartos->filter(function ($quarto) {
            return $quarto->id;
        })->count();

        $countlivres = $quartos->filter(function ($quarto) {
            return $quarto->livre;
        })->count();

        $countocupados =  $qtdquartos - $countlivres;

        return view('home', compact('quartos', 'countlivres', 'countocupados', 'qtdquartos'));
    }
}
