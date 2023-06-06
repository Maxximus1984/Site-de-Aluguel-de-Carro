<?php
$host = 'localhost';
$user = 'admin';
$password = '123';
$database = 'akira';

$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}
?>
