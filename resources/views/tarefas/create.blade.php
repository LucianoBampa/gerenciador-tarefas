<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Nova Tarefa</title>
</head>
<body>
    <h1>Criar Nova Tarefa</h1>
    <form action="/tarefas" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br>

        <label for="status">Status:</label>
        <input type="text" name="status" id="status"><br>

        <button type="submit">Criar Tarefa</button>
    </form>
    <a href="/">Voltar</a>
</body>
</html>
