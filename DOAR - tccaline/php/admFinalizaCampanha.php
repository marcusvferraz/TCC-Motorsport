<?php

if ($_GET) {
    $id = $_GET['id'];
    session_start();
    include_once('../conexao/Conexao.php');
    $ativo = 'finalizada';

    $sql = "UPDATE `tbl_campanha` SET `camp_Status` = '$ativo' WHERE camp_Id = $id ";
    echo $sql;
    $rs = mysqli_query($con, $sql) or die("Erro ao desativar");

    if ($rs) {
        $_SESSION['sucesso'] = 12;
        header('location: ../admVisualizarCampanhas.php');
        die();
    } else {
        $_SESSION['erro'] = 20;
        header('location: ../admVisualizarCampanhas.php');
        die();
    }
}
