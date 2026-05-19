<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Filme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-5">
    <div class="container" style="max-withd: 600px;">
        <h2 class="mb-4">Adcionar Filme</h2>

        <form action="/filmes/salvar" method="post" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label for="titulo">Título do Filme</label>
                <input id="titulo" type="text" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="genero">Gênero</label>
                <input type="text" id="genero" name="genero" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ano">Ano de Lançamento</label>
                <input type="text" id="ano" name="ano" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar Filme</button>
            </div>
        </form>
    </div>
</body>
</html>