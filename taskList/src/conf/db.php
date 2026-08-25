<?php

define("DB_HOSTNAME", "db"); // Correcto: apunta al nombre del servicio
define("DB_PORT", "3306");    // <-- CAMBIADO: Red interna usa siempre el puerto por defecto
define("DB_USER", "pepe");
define("DB_PASS", "1234");
define("DB_SCHEMA", "taskList_db");

define(
    "DB_DSN",
    'mysql:host=' . DB_HOSTNAME . ';
port=' . DB_PORT . ';
dbname=' . DB_SCHEMA
);
