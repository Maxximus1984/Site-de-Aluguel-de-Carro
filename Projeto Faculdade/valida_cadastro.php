<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação dos campos
    $erros = array();

    if (empty($nome) || empty($email) || empty($senha)) {
        $erros[] = "Todos os campos devem ser preenchidos.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Digite um endereço de e-mail válido.";
    }

    if (strlen($senha) < 8) {
        $erros[] = "A senha deve ter pelo menos 8 caracteres.";
    }

    // Verifica se ocorreram erros de validação
    if (count($erros) > 0) {
        // Exibe as mensagens de erro para o usuário
        echo "Ocorreram erros no cadastro:<br>";
        foreach ($erros as $erro) {
            echo "- " . $erro . "<br>";
        }
    } else {
        // Processamento adicional (exemplo: salvar os dados em um banco de dados)
        // ...
        
        // Exibe uma mensagem de sucesso
        echo "Cadastro realizado com sucesso!";
    }
}
?>