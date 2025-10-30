<?php 

// Configurações do banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'meu_banco';

// Criar a conexão
$conn = new mysqli($host, $usuario, $senha);

// Depois, pedir ao MySQL verificar se existe um DB e criar
$sql = "CREATE DATABASE IF NOT EXISTS $banco";

if($conn->connect_error) {
    die ("Falha na conexão: " . $conn->connect_error);
} else {
    if(mysqli_query($conn, $sql)){
        echo "Database criado";
    }
}

return $conn;