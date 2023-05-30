<?php
// ...

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pessoas (nome, idade, email) VALUES ('$nome', $idade, '$email')";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo 'Pessoa cadastrada com sucesso.';
    } else {
        echo 'Erro ao cadastrar pessoa: ' . mysqli_error($conexao);
    }
}
?>