<?php
// Conexão com o banco de dados
$conn = mysqli_connect("localhost", "seu_usuario", "sua_senha", "seu_banco_de_dados");

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Coleta as informações de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica as credenciais de login
$sql = "SELECT id, nome_usuario FROM usuarios WHERE email='$email' AND senha='$senha'";
$resultado = mysqli_query($conn, $sql);

// Verifica se a consulta retornou uma linha
if (mysqli_num_rows($resultado) == 1) {
    // Inicia uma sessão e armazena informações do usuário
    session_start();
    $dados_usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['id_usuario'] = $dados_usuario['id'];
    $_SESSION['nome_usuario'] = $dados_usuario['nome_usuario'];

    // Redireciona para uma página segura
    header("Location: pagina_segura.php");
    exit();
} else {
    echo "Credenciais inválidas!";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>