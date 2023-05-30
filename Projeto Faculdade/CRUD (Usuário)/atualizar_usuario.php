<?php
// ...

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];

    $sql = "UPDATE pessoas SET nome='$nome', idade=$idade, email='$email' WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo 'Pessoa atualizada com sucesso.';
    } else {
        echo 'Erro ao atualizar pessoa: ' . mysqli_error($conexao);
    }
}
?>