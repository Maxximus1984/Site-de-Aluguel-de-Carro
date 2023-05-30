<?php
// ...

$sql = "SELECT * FROM automoveis";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo 'ID: ' . $linha['id'] . '<br>';
        echo 'Marca: ' . $linha['marca'] . '<br>';
        echo 'Modelo: ' . $linha['modelo'] . '<br>';
        echo 'Ano: ' . $linha['ano'] . '<br>';
        echo '<br>';
    }
} else {
    echo 'Nenhum automóvel encontrado.';
}
?>