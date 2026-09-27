<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "pwv";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");
?>
