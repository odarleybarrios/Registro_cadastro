<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $table = 'servicos';

    public function ordemServico()
    {
        return $this->belongsTo(OrdemServico::class, 'ordem_servicos_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id', 'id');
    }
}
