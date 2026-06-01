<?php

// Exibir os erros apenas no desenvovimento
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "controllers/FilmeController.php";

// Captura a URL base (ignorando os parâmetros GET como ?id=1)
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$controller = new FilmeController();

// Sistema de Roteamento
switch ($url) {
    case '/':
    case '/filmes':
        $controller->listarWeb();
        break;
    
    case '/filmes/novo':
        $controller->exibirFormulario();
        break;

    case '/filmes/salvar':
        $controller->salvarWeb();
        break;

    case '/api/filmes':
        $controller->listarApi();
        break;

    case '/filmes/excluir':
        $controller->excluir();
        break;

    default:
        http_response_code(404);
        echo "<h1>404 - Página não encontrada</h1>";
        break;
}