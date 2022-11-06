<?php

if ($_POST) {
    include_once('../conexao/Conexao.php');
    session_start();
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];

    require_once('funcoes.php');
    $celular = retirarMask($celular);
    echo $celular;
    $sql = "UPDATE `tbl_doador` SET `doador_Nome`='$nome',`doador_Celular`='$celular'  WHERE doador_Id = $id";

    $res = mysqli_query($con, $sql) or die('Houver um erro na conexao com o banco de dados!');

    if ($res) {
        echo "Sucesso";
        $_SESSION['sucesso'] = 3;
        header('location: ../usuConfigPerfil.php');
    } else {
        $_SESSION['erro'] = 17;
        header('location: ../usuConfigPerfil.php');
    }
    header('location: ../usuConfigPerfil.php');
}
