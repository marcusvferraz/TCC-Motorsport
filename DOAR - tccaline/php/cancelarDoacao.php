<?php

session_start();
require_once('../conexao/Conexao.php');

$mudaStatus = 'cancelada';

if ($_GET) {
    $id = $_GET['id'];

    $sql = "UPDATE `tbl_itens_doador` SET `status_doacao`= '$mudaStatus' WHERE `id_Itens_Doador` = $id";

    echo $sql;

    $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

    if ($rs) {
        header('location: ../usuContribuicoes.php');
        die();
    } else {
        header('location: ../usuContribuicoes.php');
        die();
    }
}
