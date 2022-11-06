<?php

if ($_POST) {

    session_start();
    include_once('../conexao/Conexao.php');
    $nomeCamp = $_POST['NomeCampanha'];
    $dataFim = $_POST['dataFim'];
    $descricao = $_POST['descricao'];
    $causa = $_POST['causaSocial'];
    $id = $_POST['id'];

    $sql = "UPDATE `tbl_campanha` SET `camp_Nome`='$nomeCamp' ,`camp_Descricao`='$descricao', `camp_DataFinalCampanha`='$dataFim' , `camp_TipoCausa`='$causa' WHERE `camp_Id`='$id'";

    $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

    if ($rs) {
        $_SESSION['sucesso'] = 5;
        header('location: ../entDetalheCampanha.php?id=' . $id);
    } else {
        $_SESSION['erro'] = 12;
        header('location: ../entDetalheCampanha.php?id=' . $id);
    }
}
