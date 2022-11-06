<?php

if ($_POST) {
    session_start();
    include_once('../conexao/Conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nomeCamp'];
    $des = $_POST['descricao'];
    $agra = $_POST['agradecimentos'];
    $causa = $_POST['causa'];

    $sql = "UPDATE `tbl_campanha` SET `camp_Nome`='$nome',`camp_Descricao`='$des',`camp_Agradecimento`='$agra',`camp_TipoCausa`='$causa' WHERE camp_Id = $id";

    $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

    if ($rs) {
        $_SESSION['sucesso'] = 14;
        header('location: ../admEditarCampanha.php?id=' . $id);
        die();
    } else {
        $_SESSION['erro'] = 17;
        header('location: ../admEditarCampanha.php?id=' . $id);
        die();
    }
}
