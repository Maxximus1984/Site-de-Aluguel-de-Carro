<?php

    session_start();

    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
        print "<script>location.href='login_admin.php';<script>";
    }

    include("config.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM tb_admin WHERE email = '{$email}' AND senha = '{$senha}'";

    $res = $conn->query($sql) or die($conn->$error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["email"] = $row->email;
        $_SESSION["nome"]  = $row->nome;
    print "<script>location.href='criar_carro.html';</script>";
        }else{
    print "<script>alert('E-mail ou Senha Inválido(s)!');</script>";
    print "<script>location.href='login_admin.html';</script>";
        }

?>