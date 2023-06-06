<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM automoveis WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo 'Automóvel excluído com sucesso.';
    } else {
        echo 'Erro ao excluir automóvel: ' . mysqli_error($conexao);
    }
}
?>