<?php

// Conectar ao banco de dados
include_once('config.php');

    // Obter os dados do formulário
    $id = $_GET['id'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $preço = $_POST['preço'];

    // Atualizar os dados do carro no banco de dados
    $sql = $conn->prepare("UPDATE tb_carros SET modelo = :modelo, ano = :ano, preço = :preço WHERE id = :id");
    $sql->bind_param("sidi", $modelo, $ano, $preço, $id);

// Consultar o carro pelo ID
$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM tb_carros WHERE id = :id");
$sql->bind_param("i", $id);
$sql->execute();

$result = $sql->get_result();
$carro = $result->fetch_assoc();

// Exibir o formulário de edição
?>