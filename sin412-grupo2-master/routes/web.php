<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CicloController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth:web']], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });

    Route::get('/', [Controller::class, 'index'])->name('dashboard');

    Route::get('/sobre', function () { return view('sobre'); })->name('sobre');

    Route::get('/configuracoes', [UserController::class, 'configuracoes'])->name('configuracoes');

    // Tarefas
    Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas');
    Route::post('/tarefas/store', [TarefaController::class, 'store'])->name('tarefas.store');
    Route::post('/tarefas/update', [TarefaController::class, 'update'])->name('tarefas.update');
    Route::post('/tarefas/update/refresh', [TarefaController::class, 'refresh'])->name('tarefas.refresh');
    Route::post('/tarefas/destroy', [TarefaController::class, 'destroy'])->name('tarefas.destroy');

    // Ciclos
    Route::post('/ciclos/store', [CicloController::class, 'store'])->name('ciclos.store');
    Route::post('/ciclos/update', [CicloController::class, 'update'])->name('ciclos.update');
    Route::post('/ciclos/destroy', [CicloController::class, 'destroy'])->name('ciclos.destroy');

    Route::get('/calendario', [TarefaController::class, 'calendario'])->name('calendario');

    Route::get('/analytics', [RelatorioController::class, 'index'])->name('analytics');
    Route::get('/admin/analytics', [RelatorioController::class, 'admin'])->name('analytics.admin');

    // User
    Route::post('/usuario/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/usuario/tdah', [UserController::class, 'tdah'])->name('users.tdah');
    Route::post('/usuario/admin/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
