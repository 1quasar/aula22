<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo MVC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Catálogo de Filmes</h1>
            <a href="/filmes/novo" class="btn btn-primary">+ Novo Filme</a>
        </div>

        <table class="table table-white table-striped shadow-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filmes as $filme): ?>
                    <tr>
                        <td><?= $filme['id'] ?></td>
                        <td><?= htmlspecialchars($filme['titulo']) ?></td>
                        <td><?= htmlspecialchars($filme['genero']) ?></td>
                        <td><?= $filme['ano'] ?></td>
                        <td>
                            <a href="/filmes/excluir?id=<?= $filme['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir este filme?');">Excluir</a>
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>