<?php

namespace App\Models;

use App\Models\Tarefa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ciclo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tempo_pausa', 'tempo_foco', 'label'
    ];

    public function tarefas()
    {
    	return $this->hasMany(Tarefa::class);
    }
}
