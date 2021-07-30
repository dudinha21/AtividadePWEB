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

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$x = $connection->query("SELECT * FROM formcadastro WHERE email = :email");

if($x == null){
$preparedstatement = $sql->prepare("INSERT INTO formcadastro (nome, email, login, senha) VALUES ('$nomeDeUsuario', '$email','$login', '$senha')");
$preparedstatement->bindParam(":nome", $nome);
$preparedstatement->bindParam(":email", $email);
$preparedstatement->bindParam(":login", $login);
$preparedstatement->bindParam(":senha", $senha);
            if($connection->query($sql)){
             
                echo "Usuário inserido com sucesso.";
            } 
            else {
                echo "Erro ".$sql." ".$connection->error;
            }
}
else {
    echo "ERRO";
}
