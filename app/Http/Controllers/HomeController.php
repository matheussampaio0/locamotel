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

        # Count how many rooms are in the database
        $qtdquartos = $quartos->filter(function ($quarto) {
            return $quarto->id;
        })->count();

        # Count how many rooms are free
        $countlivres = $quartos->filter(function ($quarto) {
            return $quarto->livre;
        })->count();

        # Count how many rooms are busy
        $countocupados =  $qtdquartos - $countlivres;

        return view('home', compact('quartos', 'countlivres', 'countocupados', 'qtdquartos'));
    }
}
