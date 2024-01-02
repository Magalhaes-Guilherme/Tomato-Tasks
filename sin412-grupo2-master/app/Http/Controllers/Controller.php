<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $ciclos = Ciclo::all();
        $tarefas = Auth::user()->tarefas;
        return view('welcome',[
            'ciclos' => $ciclos,
            'tarefas' => $tarefas,
        ]);
    }
}
