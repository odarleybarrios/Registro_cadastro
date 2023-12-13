<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    public function ordemServico()
    {
        return $this->belongsTo(OrdemServico::class, 'ordem_servico_id', 'id');
    }
}
