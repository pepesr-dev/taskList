<?php

//require_once __DIR__ . "/../conf/db.php";


function connectDB(): PDO
{
    $host = getenv('DB_HOSTNAME');
    $port = getenv('DB_PORT') ?: '23087';
    $db = getenv('DB_SCHEMA');
    $user = getenv('DB_USER');
    $pass = getenv('DB_PASS');

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        // Muestra el error real en pantalla temporalmente
        die("Error: " . $e->getMessage());
    }
}