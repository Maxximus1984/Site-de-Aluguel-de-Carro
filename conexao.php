<?php

$servername = "localhost"; // nome do servidor
$username = "admin"; // nome de usuário do banco de dados
$password = "123"; // senha do banco de dados
$dbname = "db_site"; // nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conexão bem sucedida!";
?>
