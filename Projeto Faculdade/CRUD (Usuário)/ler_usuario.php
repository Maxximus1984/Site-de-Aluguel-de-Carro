<?php
// ...

$sql = "SELECT * FROM pessoas";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo 'Nome: ' . $linha['nome'] . '<br>';
        echo 'Idade: ' . $linha['idade'] . '<br>';
        echo 'Email: ' . $linha['email'] . '<br>';
        echo '<br>';
    }
} else {
    echo 'Nenhuma pessoa cadastrada.';
}
?>