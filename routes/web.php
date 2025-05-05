<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tarefa;

// LISTAR todas as tarefas na página inicial
Route::get('/', function () {
    $tarefas = Tarefa::all();
    return view('welcome', compact('tarefas'));
});

// EXIBIR formulário para criar nova tarefa
Route::get('/tarefas/create', function () {
    return view('tarefas.create');
});

// SALVAR a tarefa no banco
Route::post('/tarefas', function () {
    Tarefa::create(request()->all());
    return redirect('/');
});

// EXIBIR formulário para editar tarefa existente
Route::get('/tarefas/{id}/edit', function ($id) {
    $tarefa = Tarefa::findOrFail($id);
    return view('tarefas.edit', compact('tarefa'));
});

// ATUALIZAR a tarefa no banco
Route::put('/tarefas/{id}', function ($id) {
    $tarefa = Tarefa::findOrFail($id);
    $tarefa->update(request()->all());
    return redirect('/');
});

// EXCLUIR a tarefa
Route::delete('/tarefas/{id}', function ($id) {
    Tarefa::destroy($id);
    return redirect('/');
});
