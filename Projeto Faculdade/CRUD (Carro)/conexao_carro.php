<?php
$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$database = 'automoveis';

$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}
?>
