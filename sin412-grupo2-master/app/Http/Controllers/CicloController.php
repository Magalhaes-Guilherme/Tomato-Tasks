<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ciclo::create(
            [
                'label' => $request['label'],
                'tempo_pausa' => $request['tempo_pausa'],
                'tempo_foco' => $request['tempo_foco'],
            ]
        );
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ciclo = Ciclo::findOrFail($request['id']);
        $ciclo->update(
            [
                'label' => $request['label'],
                'tempo_pausa' => $request['tempo_pausa'],
                'tempo_foco' => $request['tempo_foco'],
            ]
        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ciclo = Ciclo::findOrFail($request['id']);
        foreach($ciclo->tarefas as $tarefa){
            $tarefa->delete();
        }
        $ciclo->delete();
        return redirect()->back();
    }
}
