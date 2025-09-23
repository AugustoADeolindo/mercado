<?php
require_once 'config.php';

function getDbConnection()
{
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";

        $pdo = new PDO($dsn, DB_USER, DB_PASS, OPTIONS);

        return $pdo;
    } catch (PDOException $e) {
        die("Erro fatal de conexão com o banco de dados: " . $e->getMessage());
    }
}
