<?php
// ...

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    $sql = "UPDATE automoveis SET marca='$marca', modelo='$modelo', ano=$ano WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo 'Automóvel atualizado com sucesso.';
    } else {
        echo 'Erro ao atualizar automóvel: ' . mysqli_error($conexao);
    }
}
?>