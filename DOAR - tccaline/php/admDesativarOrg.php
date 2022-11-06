<?php

if ($_GET) {
    $id = $_GET['id'];
    session_start();
    include_once('../conexao/Conexao.php');
    $ativo = 0;

    $sql = "UPDATE  `tbl_organizacao` SET `org_ativo`= '$ativo' WHERE org_Id = $id ";

    $rs = mysqli_query($con, $sql) or die("Erro ao desativar");

    if ($rs) {
        $_SESSION['sucesso'] = 10;
        header('location: ../admVisualizarEntidades.php');
        die();
    } else {
        $_SESSION['erro'] = 19;
        header('location: ../admVisualizarEntidades.php');
        die();
    }
}