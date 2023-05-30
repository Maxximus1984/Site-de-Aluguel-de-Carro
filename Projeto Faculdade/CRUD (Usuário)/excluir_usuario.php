<?php
// ...

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM pessoas WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo 'Pessoa excluída com sucesso.';
    } else {
        echo 'Erro ao excluir pessoa: ' . mysqli_error($conexao);
    }
}
?>