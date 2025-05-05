<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <ul>
        @foreach ($tarefas as $tarefa)
            <li>
                {{ $tarefa->titulo }} - {{ $tarefa->status ?? 'Sem status' }}
                <a href="/tarefas/{{ $tarefa->id }}/edit">Editar</a>
                <form action="/tarefas/{{ $tarefa->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="/tarefas/create">Criar Nova Tarefa</a>
</body>
</html>
