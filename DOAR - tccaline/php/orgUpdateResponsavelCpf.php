<?php
if ($_POST) {
    session_start();
    include_once('../conexao/Conexao.php');
    $fk = $_POST['id'];

    $cpf = $_POST['cpf'];
    $respNome = $_POST['nomeResponsavel'];
    $respEmail = $_POST['emailResponsavel'];
    $respCelular = $_POST['celularResponsavel'];

    require_once('../php/funcoes.php');

    $respCelular = retirarMask($respCelular);

    $sql2 = "UPDATE `tbl_responsavel` SET `resp_CPF`='$cpf' ,`resp_Nome`='$respNome',`resp_Email`='$respEmail',`resp_Celular`='$respCelular' WHERE `fk_Org_Responsavel`='$fk'";

    $rs2 = mysqli_query($con, $sql2) or die('Erro ao tentar atualizar.');

    if ($rs2) {
        $_SESSION['sucesso'] = 3;
        echo ('SEM CPF OK');
        header('location: ../entEditarPerfil.php');
        die();
    } else {
        $_SESSION['erro'] = 10;
        header('location: ../entEditarPerfil.php');

        die();
    }
    header('location: ../entEditarPerfil.php');
    die();
}
