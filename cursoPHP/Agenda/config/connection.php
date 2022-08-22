<?php

$host = "localhost";
$dbname = "cursophp_mysql";
$user = "root";
$password = "masterkey";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    //habilitar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (\PDOException $ex) {
    $error = $e->getMessage();
    echo "Erro: $error";
}