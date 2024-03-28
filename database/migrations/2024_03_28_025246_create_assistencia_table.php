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
        Schema::create('assistencia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('cliente_id')->constrained(table: 'cliente', indexName: 'fk_cliente_id');
            $table->dateTime('data');
            $table->string('descricao');
            $table->string('tecnico');
            $table->string('data_resolucao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistencia');
    }
};
