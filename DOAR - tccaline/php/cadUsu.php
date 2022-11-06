<?php

// variaveis que vem por Post
if ($_POST) {
    session_start();
    // inclui a conexao
    include_once('../conexao/Conexao.php');
    $anoNascimento = $_POST['anoNascimento'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $senha2 = $_POST['password2'];

    // variaveis vazias
    $nome = ' ';
    $celular = 0;
    $ativo = 1;

    if ($senha != $senha2) {
        $_SESSION['erro'] = 11;
        header('location: ../cadUsuario.php');
        die();
    }

    // criptografa a senha e guarda em uma nova variavel
    $senhaCrip = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `tbl_doador`( `doador_Nome`, `doador_Email`, `doador_Celular`, `doador_Nasc`, `doador_Senha`, `doador_ativo`) VALUES ('$nome','$email','$celular','$anoNascimento','$senhaCrip','$ativo')";

    $rs = mysqli_query($con, $sql) or die('erro con ou sql');

    if ($rs) {
        $_SESSION['sucesso'] = 1;
        header('location: ../login.php');
        die();
    } else {
        $_SESSION['erro'] = 11;
        header('location: ../cadUsuario.php');
        die();
    }
}
