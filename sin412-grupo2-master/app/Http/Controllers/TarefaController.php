<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Tarefa;
use App\Models\Ciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->papel == "admin"){
            $dados = Tarefa::get();
        }else{
            $dados = Auth::user()->tarefas;
        }
        $tarefas = [];
        foreach($dados as $dado){
            $criacao = (new Datetime($dado->created_at))->format('Y-m-d');
            $tarefas[$criacao][] = $dado;
        }
        return view('tarefas',[
            'tarefas' => $tarefas,
        ]);
    }

    public function calendario()
    {
        $tarefas = Auth::user()->tarefas;
        return view('calendario',[
            'tarefas' => $tarefas,
        ]);
    }

    public function store(Request $request)
    {
        $ciclo = Ciclo::where('id', $request['ciclo_id'])->first();
        $tempo = $request['qtd_ciclos']*($ciclo->tempo_pausa + $ciclo->tempo_foco);
        Tarefa::create(
            [
                'titulo' => $request['titulo'],
                'descricao' => $request['descricao'],
                'tempo' => $tempo,
                'qtd_ciclos' => $request['qtd_ciclos'],
                'status' => 'To do',
                'complexidade' => $request['complexidade'],
                'prioridade' => $request['prioridade'],
                'user_id' => Auth::user()->id,
                'ciclo_id' => $request['ciclo_id'],
            ]
        );
        return redirect(route('dashboard'));
    }

    public function update(Request $request)
    {
        $tarefa = Tarefa::findOrFail($request['id']);
        $ciclo = Ciclo::where('id', $request['ciclo_id'])->first();
        $tempo = $request['qtd_ciclos']*($ciclo->tempo_pausa + $ciclo->tempo_foco);
        $tarefa->update(
            [
                'titulo' => $request['titulo'],
                'descricao' => $request['descricao'],
                'tempo' => $tempo,
                'qtd_ciclos' => $request['qtd_ciclos'],
                'complexidade' => $request['complexidade'],
                'prioridade' => $request['prioridade'],
                'ciclo_id' => $request['ciclo_id'],
            ]
        );
        return redirect(route('dashboard'));
    }

    public function refresh(Request $request)
    {
        $tarefa = Tarefa::findOrFail($request['id']);
        $tarefa->update(
            [
                'status' => $request['status'],
            ]
        );
        return;
    }

    public function destroy(Request $request)
    {
        $tarefa = Tarefa::findOrFail($request['id']);
        $tarefa->delete();
        return redirect()->back();
    }
}
