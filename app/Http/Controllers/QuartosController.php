<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quarto;

class QuartosController extends Controller
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
     * Show the Control Panel of Room's dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Quarto $quarto)
    {
    	$quartos = $quarto->all();
        return view('controlquartos', compact('quartos'));
    }

    public function add()
    {
        return 'teste';
    }
}
