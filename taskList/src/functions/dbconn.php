<?php

//require_once __DIR__ . "/../conf/db.php";


function connectDB(): PDO
{
    $host = getenv('DB_HOST');
    $port = getenv('DB_PORT') ?: '23087';
    $db = getenv('DB_NAME');
    $user = getenv('DB_USER');
    $pass = getenv('DB_PASS');

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        error_log($e->getMessage());
        die("Error de conexión a la base de datos.");
    }
}