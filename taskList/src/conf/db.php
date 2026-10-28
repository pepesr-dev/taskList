<?php
define("DB_HOSTNAME", getenv('DB_HOSTNAME') ?: "db");
define("DB_PORT", getenv('DB_PORT') ?: "3306");
define("DB_USER", getenv('DB_USER') ?: "pepe");
define("DB_PASS", getenv('DB_PASS') ?: "1234");
define("DB_SCHEMA", getenv('DB_SCHEMA') ?: "taskList_db");

define(
    "DB_DSN",
    'mysql:host=' . DB_HOSTNAME . ';port=' . DB_PORT . ';dbname=' . DB_SCHEMA
);