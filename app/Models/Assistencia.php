<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistencia extends Model
{
    use HasFactory;

    protected $table = 'assistencia';

    protected $fillable = [
        'cliente_id',
        'data',
        'descricao',
        'tecnico',
        'data_resolucao'
    ];
}
