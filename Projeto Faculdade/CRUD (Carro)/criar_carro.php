<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO automoveis (marca, modelo, ano) VALUES ('$marca', '$modelo', $ano)";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo 'Automóvel criado com sucesso.';
    } else {
        echo 'Erro ao criar automóvel: ' . mysqli_error($conexao);
    }
}
?>