<?php

define("DB_HOSTNAME", "localhost");
define("DB_PORT", "3306");
define("DB_USER", "pepe");
define("DB_PASS", "@Pepe.dev2025");
define("DB_SCHEMA", "db_taskList");


define(
    "DB_DSN",
    'mysql:host=' . DB_HOSTNAME . ';
port=' . DB_PORT . ';
dbname=' . DB_SCHEMA
);
