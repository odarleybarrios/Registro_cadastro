<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data_entrada');
            $table->date('data_saida');
            $table->float('valor_servico');
            $table->unsignedBigInteger('ordem_servicos_id');
            $table->foreign('ordem_servicos_id')->references('id')->on('ordem_servicos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
