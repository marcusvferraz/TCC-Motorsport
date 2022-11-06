<?php

if (isset($_POST['accountActivation'])) {
    session_start();
    include_once('../conexao/Conexao.php');

    $id = $_SESSION['id'];
    $desativa = 0;

    echo $id;

    $sql = "UPDATE `tbl_Doador` SET `doador_ativo`= $desativa  WHERE `doador_Id`= $id";

    echo $sql;

    $rs = mysqli_query($con, $sql) or die("Erro no select login");

    if ($rs) {
        echo "destroir sessao";
    } else {
        echo "não funcionou";
    }
} else {
    echo "checkbox não marcado! <br/>";
}
