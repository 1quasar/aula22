<?php

require_once "config/database.php";

class Filme {
    // Método para ler (READ)
    public static function buscarTodos() {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT * FROM filmes ORDER BY id DESC");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Método para inserir um novo filme (CREATE)
    public static function salvar($titulo, $genero, $ano) {
        $pdo = Database::getConnection();

        // Uso de Prepared Statements para evitar SQL Injections (Segurança)
        $sql = "INSERT INTO filmes (titulo, genero, ano) VALUES (:titulo, :genero, :ano)";

        $stmt = $pdo->prepare($sql);

        // Substitui os links (bind) pelos valores reais
        $stmt->bindValue(':titulo', $titulo);
        $stmt->bindValue(':genero', $genero);
        $stmt->bindValue(':ano', $ano);

        return $stmt->execute(); // Retorna true se deu certo
    }

    // Método para remover um filme selecionado 
    public static function deletar($id) {
        $pdo = Database::getConnection();

        $sql = "DELETE FROM filmes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        
        return $stmt->execute();
    }

    public static function buscarPorId($id) {
        $pdo = Database::getConnetion();

        $stmt = $pdo->query("SELECT * FROM filmes WHERE id = :id");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}