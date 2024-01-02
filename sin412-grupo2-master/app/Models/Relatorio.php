<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relatorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_inicio', 'data_final', 'tipo', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
