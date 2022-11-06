<?php

if ($_GET) {
    $id = $_GET['id'];
    session_start();
    include_once('../conexao/Conexao.php');
    $ativo = 0;

    $sql = "UPDATE `tbl_doador` SET `doador_ativo`='$ativo' WHERE doador_Id = $id ";

    $rs = mysqli_query($con, $sql) or die("Erro ao desativar");

    if ($rs) {
        $_SESSION['sucesso'] = 9;
        header('location: ../admVisualizarDoadores.php');
        die();
    } else {
        $_SESSION['erro'] = 18;
        header('location: ../admVisualizarDoadores.php');
        die();
    }
}
