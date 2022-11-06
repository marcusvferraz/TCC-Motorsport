<?php
if ($_POST) {
    session_start();
    include_once('../conexao/Conexao.php');
    $fk = $_SESSION['id'];
    $respNome = $_POST['nomeResponsavel'];

    $respEmail = $_POST['emailResponsavel'];
    $respCelular = $_POST['celularResponsavel'];

    // chama as funcoes 
    require_once('funcoes.php');

    // retira a mascara 
    $respCelular = retirarMask($respCelular);

    $sql = "UPDATE `tbl_responsavel` SET `resp_Nome`='$respNome',`resp_Email`='$respEmail',`resp_Celular`='$respCelular' WHERE `fk_Org_Responsavel`='$fk'";

    $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

    if ($rs) {
        $_SESSION['sucesso'] = 3;
        header('location: ../entEditarPerfil.php');
    } else {
        $_SESSION['erro'] = 10;
        header('location: ../entEditarPerfil.php');
    }
}
