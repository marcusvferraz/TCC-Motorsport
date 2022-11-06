<?php

if ($_POST) {
    session_start();
    include_once('../conexao/Conexao.php');

    $id = $_POST['id'];
    $cnpj = $_POST['cnpj'];
    $razaoSocial = $_POST['razaoSocial'];
    $nomeFantasia = $_POST['nomeFantasia'];
    $telefone = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complement = $_POST['complemento'];
    $emailLogin = $_POST['email'];
    $status = $_POST['status'];
    $site = $_POST['site'];
    $sobre = $_POST['sobre'];

    echo $status;
    require_once('../php/funcoes.php');

    // retira a mascara 
    $cnpj = retirarMask($cnpj);
    $telefone = retirarMask($telefone);
    $telefone2 = retirarMask($telefone2);
    $celular = retirarMask($celular);
    $cep = retirarMask($cep);

    $sql = "UPDATE `tbl_organizacao` SET `org_NomeFantasia`='$nomeFantasia',`org_CEP`='$cep',`org_Estado`='$estado',`org_Cidade`='$cidade',`org_Bairro`='$bairro',`org_Rua`='$rua',`org_Numero`='$numero',`org_Complemento`='$complement',`org_Site`='$site',`org_Telefone1`='$telefone',`org_Telefone2`='$telefone',`org_Celular`='$celular',`org_Sobre`='$sobre',`login_Organizacao`='$emailLogin',`org_ativo`='$status' WHERE org_Id = $id";

    $res = mysqli_query($con, $sql) or die('Houver um erro na conexao com o banco de dados!');

    if ($res) {
        $_SESSION['sucesso'] = 5;
        header('location: ../admEditarOrganizacao.php?id=' . $id);
        die();
    } else {
        $_SESSION['erro'] = 10;
        header('location: ../admEditarOrganizacao.php?id=' . $id);
        die();
    }
    header('location: ../admEditarOrganizacao.php');
    die();
}
