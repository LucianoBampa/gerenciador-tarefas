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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();                         // id auto-incremento
            $table->string('titulo');             // título da tarefa
            $table->text('descricao');            // descrição detalhada
            $table->string('status');             // status (ex: Pendente, Concluída)
            $table->timestamps();                 // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
