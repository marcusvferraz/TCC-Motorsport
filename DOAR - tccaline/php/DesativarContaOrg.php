<?php

if (isset($_POST['accountActivation'])) {
    session_start();
    include_once('../conexao/Conexao.php');

    $id = $_SESSION['id'];

    $sql = "UPDATE `tbl_organizacao` SET `org_ativo`=0  WHERE `org_Id`=$id";

    $rs = mysqli_query($con, $sql) or die("Erro no select login");

    if ($rs) {
        echo "destroir sessao";
    } else {
        echo "não funcionou";
    }
} else {
    echo "checkbox não marcado! <br/>";
}
