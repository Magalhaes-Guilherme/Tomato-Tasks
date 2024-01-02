<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ciclo;
use App\Models\Tarefa;
use App\Models\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function configuracoes()
    {
        $myUser = Auth::user();
        $ciclos = Ciclo::get();
        $users = User::get();
        return view('configuracoes',[
            'myUser' => $myUser,
            'ciclos' => $ciclos,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::findOrFail($request['id']);
        if($request['tdah'] == 1){
            $tdah = true;
        }else{
            $tdah = false;
        }
        $user->update(
            [
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'TDAH' => $tdah,
            ]
        );
        return redirect()->back();
    }

    public function tdah(Request $request){
        $user = Auth::user();
        if($request['tdah'] == 1){
            $tdah = true;
        }else{
            $tdah = false;
        }
        $user->update(
            [
                'TDAH' => $tdah,
                'cadastro' => true,
            ]
        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::findOrFail($request['id']);
        foreach($user->tarefas as $tarefa){
            $tarefa->delete();
        }
        foreach($user->relatorios as $relatorio){
            $relatorio->delete();
        }
        $user->delete();
        return redirect()->back();
    }
}
