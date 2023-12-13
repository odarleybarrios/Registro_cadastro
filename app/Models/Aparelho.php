<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparelho extends Model
{
    use HasFactory;
    protected $table = 'aparelhos';
    public function ordemServico()
    {
        return $this->belongsTo(OrdemServico::class, 'ordem_servico_id', 'id');
    }
}
