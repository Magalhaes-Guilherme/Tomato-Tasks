<?php

namespace Tests\Unit;

use App\Http\Controllers\RelatorioController;
use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\MockInterface;
use Tests\TestCase;

class RelatorioTest extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $hasMany = $this->mock(HasMany::class, function (MockInterface $mock) {
            $mock->shouldReceive('get')->once();
        });

        $user = $this->mock(User::class, function (MockInterface $mock) use ($hasMany) {
            $mock->shouldReceive('tarefas')->once()->andReturn($hasMany);
        });

        Auth::shouldReceive('user')
            ->once()
            ->andReturn($user);

        $controller = new RelatorioController();
        $view = $controller->index();

        $this->assertEquals('analytics', $view->name());

        $this->assertSame([
            'tarefas' => null,
            'relatorio' => [],
        ], $view->getData());
    }

    public function test_that_true_is_true_2(): void
    {
        $tarefas = [
            new Tarefa(['status' => 'To do', 'qtd_ciclos' => 4, 'created_at' => date('Y-m-d')])
        ];

        $hasMany = $this->mock(HasMany::class, function (MockInterface $mock) use ($tarefas) {
            $mock->shouldReceive('update')->once()->andReturn($tarefas);
        });

        $user = $this->mock(User::class, function (MockInterface $mock) use ($hasMany) {
            $mock->shouldReceive('tarefas')->once()->andReturn($hasMany);
        });

        // Criação de Request
        // $request = new Request();

        // $request->setJson(json_encode(['ciclo_id' => 1, 'titulo' => 'tema']));

        Auth::shouldReceive('user')
            ->once()
            ->andReturn($user);

        $controller = new RelatorioController();
        $view = $controller->index();

        $this->assertEquals('analytics', $view->name());

        $this->assertSame([
            'tarefas' => $tarefas,
            'relatorio' => [
                'criadas' => 1,
                'interrompidas' => 0,
                'finalizadas' => 0,
                'total' => 1,
                'total_ciclos' => 4,
                'total_foco' => 0,
                'frequencia' => [
                    '2022-07-30' => [
                        0 => $tarefas[0]
                    ],
                ],
                'media_ciclos' => 4,
                'total_dias' => 1,
            ],
        ], $view->getData());
    }
}
