<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quarto;
use App\User;
use App\Funcionario;

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
        # Save all data of table 'quarto' in $quartos
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

    public function controlfuncionarios(Funcionario $funcionario)
    {
        # Save all data of table 'funcionario' in $funcionarios
        $funcionarios = $funcionario->all();

        return view('controlfunc', compact('funcionarios'));
    }

    public function helpsys()
    {
        return view('helpsystem');
    }
}
