<?php

$SERVER= "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "atividadePweb";

$connection = new PDO("mysql:host = localhost; dbname = $DATABASE", $username, $password);

if($connection->connect_error){
    die("Conexão falhou ".$connection->connect_error);
} else {
    echo "Conexão realizada.";
}

$login = $_POST['nome'];
$senha = $_POST['senha'];



