<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa</h1>

    <form action="/tarefas/{{ $tarefa->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" id="titulo" value="{{ $tarefa->titulo }}" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao" rows="4">{{ $tarefa->descricao }}</textarea><br><br>

        <label for="status">Status:</label><br>
        <input type="text" name="status" id="status" value="{{ $tarefa->status }}"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="/">← Voltar para a lista</a>
</body>
</html>
