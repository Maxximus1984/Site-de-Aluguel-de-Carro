<?php

include("config.php");

$img = filter_input(INPUT_POST, 'img');
$ano = filter_input(INPUT_POST, 'ano');
$modelo = filter_input(INPUT_POST, 'modelo');
$preço = filter_input(INPUT_POST, 'preço');

$sql = "INSERT INTO tb_carros(img, ano, modelo, preço) VALUES('$img','$ano','$modelo','$preço')";

$resultado_carro = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
    header("Location: modelos_admin.php");
}else{
    header("Location: criar_carro.html");
}

?>