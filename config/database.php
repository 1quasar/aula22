<?php

class Database {
    public static function getConnection() {
        $host = "localhost";
        $db = "cine_senaithech";
        $user = "root";
        $pass = "alunolab";

        try {
            
            //  DSN (Data Source Name)
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

            // PDO é a classe do PHP para acesso ao banco de dados
            $pdo = new PDO($dsn, $user, $pass);

            // Configura o PDO para lançar excessões em caso de erro SQL
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {
            die("Erro de Conexão com o Banco". $e->getMessage());
        }
    }
}