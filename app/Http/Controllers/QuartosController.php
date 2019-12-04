<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quarto;
use App\User;

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
    public function index(Quarto $quarto, User $user)
    {
        $quartos = $quarto->all();
        $users = $user->all();

        # Count how many users are in the database
        $qtdfuncionarios = $users->filter(function ($user) {
            return $user->id;
        })->count();

        # Count how many rooms are in the database
        $qtdquartos = $quartos->filter(function ($quarto) {
            return $quarto->id;
        })->count();

        return view('controlquartos', compact('quartos', 'qtdfuncionarios', 'qtdquartos'));
    }

    public function helpsys()
    {
        return view('helpsystem');
    }

    public function add()
    {
        return 'teste';
    }
}
