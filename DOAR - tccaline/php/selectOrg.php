<?php

include_once('conexao/Conexao.php');

$id = $_SESSION['id'];

$sql = "SELECT * FROM `tbl_organizacao`,`tbl_responsavel` WHERE `org_Id`=$id AND `fk_Org_Responsavel` =$id ";

$rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

$dados = mysqli_fetch_array($rs);

$orgCNPJ = $dados['org_CNPJ'];
$orgRazaoSocial = $dados['org_RazaoSocial'];
$orgNomeFantasia = $dados['org_NomeFantasia'];
$orgCep = $dados['org_CEP'];
$orgEstado = $dados['org_Estado'];
$orgCidade = $dados['org_Cidade'];
$orgBairro = $dados['org_Bairro'];
$orgRua = $dados['org_Rua'];
$orgnumero = $dados['org_Numero'];
$orgComplemento = $dados['org_Complemento'];
$orgSite = $dados['org_Site'];
$orgTelefone1 = $dados['org_Telefone1'];
$orgTelefone2 = $dados['org_Telefone2'];
$orgCelular = $dados['org_Celular'];
$orgSobre = $dados['org_Sobre'];

// responsavel
$respId = $dados['resp_Id'];
$respCpf = $dados['resp_CPF'];
$respNome = $dados['resp_Nome'];
$respEmail = $dados['resp_Email'];
$respCelular = $dados['resp_Celular'];


$respCPFMascara = cpfMask($respCpf);
$_SESSION['cpfMask'] = $respCPFMascara;
$_SESSION['cpf'] = $respCpf;

function cpfMask($cpf)
{
    $cpf = str_pad(($cpf), 11, '0', STR_PAD_LEFT);
    return $cpf ? "***." . substr($cpf, 3, 3) . "." . substr($cpf, 6, 3) . "-**" : substr($cpf, 0, 3) . "." . substr($cpf, 3, 3) . "." . substr($cpf, 6, 3) . "-" . substr($cpf, 9, 2);
}
