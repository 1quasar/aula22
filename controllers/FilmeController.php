<?php
require_once "models/Filme.php";

class FilmeController {
    // -- MÉTODOS PARA WEB --

    public function listarWeb() {
        // Armazenar os filmes em uma variável
        $filmes = Filme::buscarTodos();

        // Retornar a view de exibição
        require "views/listaFilmes.php";
    }


    public function exibirFormulario() {
        require "views/formFilme.php";
    }


    public function salvarWeb() {
        // Validação de Segurança
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $titulo = $_POST['titulo'] ?? '';
            $genero = $_POST['genero'] ?? '';
            $ano = $_POST['ano'] ?? '';

            // Verifica se estão preechidos os campos
            if (!empty($titulo) && !empty($genero) && !empty($ano)) {
                Filme::salvar($titulo, $genero, $ano);
            }

            // Retorna para a página principal (Redireciona)
            header("Location: /filmes");
            exit;
        }
    }

    public function listarApi() {
        $filmes = Filme::buscarTodos();

        header("Content-Type: application/json");
        http_response_code(200);
        echo json_encode($filmes);
    }


}