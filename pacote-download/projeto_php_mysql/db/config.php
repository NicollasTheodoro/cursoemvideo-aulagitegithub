<?php
// Atualize essas credenciais conforme seu ambiente local (XAMPP/htdocs)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'maissegura123');
define('DB_NAME', 'projeto_php_mysql');

function db_connect(){
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}

session_start();
?>