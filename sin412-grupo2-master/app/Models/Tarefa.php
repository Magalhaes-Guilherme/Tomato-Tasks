<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ciclo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descricao', 'tempo', 'qtd_ciclos', 'status', 'complexidade', 'prioridade', 'user_id', 'ciclo_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ciclo()
    {
        return $this->belongsTo(Ciclo::class);
    }
}
