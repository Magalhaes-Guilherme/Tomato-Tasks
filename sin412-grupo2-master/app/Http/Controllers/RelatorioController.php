<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Ciclo;
use App\Models\Tarefa;
use App\Models\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Auth::user()->tarefas()->get();
        $relatorio = [];
        if (!empty($tarefas)) {

            $relatorio['criadas'] = 0;
            $relatorio['interrompidas'] = 0;
            $relatorio['finalizadas'] = 0;
            $relatorio['total'] = count($tarefas);
            $relatorio['total_ciclos'] = 0;
            $relatorio['total_foco'] = 0;
            $relatorio['frequencia'] = [];

            foreach ($tarefas as $tarefa) {
                if ($tarefa->status == 'To do') {
                    $relatorio['criadas']++;
                }
                if ($tarefa->status == 'Doing') {
                    $relatorio['interrompidas']++;
                }
                if ($tarefa->status == 'Done') {
                    $relatorio['finalizadas']++;
                    $relatorio['total_foco'] = $relatorio['total_foco'] + $tarefa->ciclo->tempo_foco;
                }

                $relatorio['total_ciclos'] = $relatorio['total_ciclos'] + $tarefa['qtd_ciclos'];
                $criacao = (new Datetime($tarefa->created_at))->format('Y-m-d');
                $relatorio['frequencia'][$criacao][] = $tarefa;
            }
            if ($relatorio['total'] == 0) {
                $relatorio['media_ciclos'] = 0;
            } else {
                $relatorio['media_ciclos'] = $relatorio['total_ciclos'] / $relatorio['total'];
            }
            $relatorio['total_dias'] = count($relatorio['frequencia']);
        }
        return view('analytics', [
            'tarefas' => $tarefas,
            'relatorio' => $relatorio,
        ]);
    }

    public function admin()
    {
        $tarefas = Auth::user()->tarefas()->get();
        $usuarios = User::get();
        $relatorio = [];
        if (!empty($tarefas)) {
            $relatorio['tdah'] = count(User::where('tdah', true)->get());
            $relatorio['usuarios'] = count($usuarios);
            $relatorio['criadas'] = 0;
            $relatorio['interrompidas'] = 0;
            $relatorio['finalizadas'] = 0;
            $relatorio['tarefas'] = count($tarefas);
            $relatorio['total_ciclos'] = 0;
            $relatorio['total_foco'] = 0;
            $relatorio['frequencia'] = [];
            foreach ($tarefas as $tarefa) {
                $criacao = (new Datetime($tarefa->created_at))->format('Y-m-d');
                $relatorio['frequencia'][$criacao]['Todo'] = [];
                $relatorio['frequencia'][$criacao]['Doing'] = [];
                $relatorio['frequencia'][$criacao]['Done'] = [];
                if ($tarefa->status == 'To do') {
                    $relatorio['criadas']++;
                    $relatorio['frequencia'][$criacao]['Todo'][] = '';
                }
                if ($tarefa->status == 'Doing') {
                    $relatorio['interrompidas']++;
                    $relatorio['frequencia'][$criacao]['Doing'][] = '';
                }
                if ($tarefa->status == 'Done') {
                    $relatorio['finalizadas']++;
                    $relatorio['frequencia'][$criacao]['Done'][] = '';
                    $relatorio['total_foco'] = $relatorio['total_foco'] + $tarefa->ciclo->tempo_foco;
                }
                $relatorio['total_ciclos'] = $relatorio['total_ciclos'] + $tarefa['qtd_ciclos'];
                $relatorio['frequencia'][$criacao]['total'][] = $tarefa;
            }
            if ($relatorio['tarefas'] == 0) {
                $relatorio['media_ciclos'] = 0;
            } else {
                $relatorio['media_ciclos'] = $relatorio['total_ciclos'] / $relatorio['tarefas'];
            }
            $relatorio['total_dias'] = count($relatorio['frequencia']);
            foreach ($relatorio['frequencia'] as $dado) {
                $relatorio['tempo'] = $tarefa->ciclo->tempo_foco + $tarefa->ciclo->tempo_pausa;
            }
            if (count($relatorio['frequencia']) == 0) {
                $relatorio['media_tempo'] = 0;
            } else {
                $relatorio['media_tempo'] = $relatorio['tempo'] / count($relatorio['frequencia']);
            }
        }

        return view('analytics_admin', [
            'tarefas' => $tarefas,
            'relatorio' => $relatorio,
        ]);
    }
}
