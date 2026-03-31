<?php

require_once __DIR__ . "/../conf/db.php";


function connectDB(): PDO
{


    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $pdo = new PDO(DB_DSN, DB_USER, DB_PASS, $options);
        // echo "Conexión realizada con exito <br>";
        return $pdo;
    } catch (\PDOException $e) {
        //php -S localhost:8000
        error_log($e->getMessage());
        die();
    }
}
