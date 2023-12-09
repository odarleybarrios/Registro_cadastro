<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defeito extends Model
{
    use HasFactory;
    protected $table = 'defeitos';
    public function aparelho()
    {
        return $this->belongsTo(Aparelho::class, 'aparelho_id', 'id');
    }
}
