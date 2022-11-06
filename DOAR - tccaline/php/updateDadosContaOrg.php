<?php

// se o arquivo foi recebido

if ($_POST) {

    session_start();
    include_once('../conexao/Conexao.php');
    $id = $_SESSION['id'];
    $cnpj = $_POST['cnpj'];
    $razaoSocial = $_POST['razaoSocial'];
    $nomeFantasia = $_POST['nomeFantasia'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complement = $_POST['complemento'];
    $site = $_POST['site'];
    $sobre = $_POST['sobre'];

    // chama as funcoes 
    require_once('funcoes.php');

    // retira a mascara 
    $cnpj = retirarMask($cnpj);
    $telefone1 = retirarMask($telefone1);
    $telefone2 = retirarMask($telefone2);
    $celular = retirarMask($celular);
    $cep = retirarMask($cep);

    mysqli_query($con, $sql33 = "UPDATE `tbl_organizacao` SET `org_CNPJ`='$cnpj',`org_RazaoSocial`='$razaoSocial',`org_NomeFantasia`='$nomeFantasia',`org_CEP`='$cep',`org_Estado`='$estado',`org_Cidade`='$cidade',`org_Bairro`='$bairro',`org_Rua`='$rua',`org_Numero`='$numero',`org_Complemento`='$complement',`org_Site`='$site',`org_Telefone1`='$telefone1',`org_Telefone2`='$telefone2',`org_Celular`='$celular',`org_Sobre`='$sobre' WHERE `org_Id`=$id");

    $rs = mysqli_query($con, $sql33) or die('Erro ao tentar atualizar.');

    if ($rs) {
        $_SESSION['nome'] = $nomeFantasia;
        $_SESSION['imagem'] = $image;
        $_SESSION['sucesso'] = 3;
        header('location: ../entEditarPerfil.php');
    } else {
        $_SESSION['erro'] = 10;
        header('location: ../entEditarPerfil.php');
    }
}
