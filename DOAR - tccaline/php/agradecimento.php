<?php

session_start();
if ($_POST) {
    $dtHj =  date('Y-m-d');

    include_once('../conexao/conexao.php');
    $fk = $_POST['id'];
    $agradecimento = $_POST['agradecimentos'];

    $sql = "UPDATE `tbl_campanha` SET `camp_Agradecimento`='$agradecimento', `camp_Status`='finalizada' ,`camp_DataFinalCampanha`='$dtHj' WHERE  `camp_Id`='$fk'";
    $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

    if ($rs) {
        $_SESSION['sucesso'] = 7;
        header('location: ../entCampanhaFinalizada.php?id=' . $fk);
    } else {
        $_SESSION['erro'] = 15;
        header('location: ../entCampanhaFinalizada.php?id=' . $fk);
    }
}
