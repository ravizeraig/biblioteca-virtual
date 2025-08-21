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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de ID autoincrementável e primária
            $table->string('nome'); // Coluna para o nome do produto (string)
            $table->decimal('preco', 8, 2); // Coluna para o preço (decimal com 8 dígitos no total e 2 casas decimais)
            $table->text('descricao'); // Coluna para a descrição (texto longo)
            $table->string('categoria'); // A nova coluna para a categoria
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at' automaticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};