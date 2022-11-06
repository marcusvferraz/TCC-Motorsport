<?php

if ($_POST) {
    include_once('../conexao/Conexao.php');
    session_start();
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];
    $status = $_POST['status'];

    require_once('funcoes.php');
    $celular = retirarMask($celular);

    $sql = "UPDATE `tbl_doador` SET `doador_Nome`='$nome',`doador_Celular`='$celular', `doador_Email`='$email', `doador_Nasc` = $nasc, `doador_ativo`='$status'   WHERE doador_Id = $id";

    $res = mysqli_query($con, $sql) or die('Houve um erro na conexao com o banco de dados!');

    if ($res) {
        echo "Sucesso";
        $_SESSION['sucesso'] = 3;
        header('location: ../admEditarDoador.php?id=' . $id);
    } else {
        $_SESSION['erro'] = 17;
        header('location: ../admEditarDoador.php?id=' . $id);
    }
    header('location: ../admEditarDoador.php?id=' . $id);
}
