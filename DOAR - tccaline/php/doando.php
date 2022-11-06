<?php
session_start();
include_once('../conexao/Conexao.php');
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$idDoador = $_SESSION['id'];
$status = 'pendente';

if (!empty($dados['cadDoacao'])) {

    $valores = null;
    foreach ($dados['id'] as $chave => $valor) {

        $itemQuant = $dados['quantity'][$chave];

        // se a quantidade de item for maior que zero ele entra no if
        if ($itemQuant > 0) {

            $fkIdItem =  $dados['id'][$chave];
            $doacaoQuant =  $dados['quantity'][$chave];

            // concatena na variavel valores
            $valores .= "('" . $fkIdItem . "','" . $idDoador . "','" . $doacaoQuant . "','" . $status . "'),";
        }
    }

    // se o valor for nulo ou vazio ele retorna o erro
    if ($valores == null || $valores == '') {
        $_SESSION['erro'] = 13;
        header('location: ../usuDoar.php?id=' . $_SESSION['ultimaCampanha']);
        die();
    } else {
        // caso contrario....
        // retira a ultima virgula
        $valores = substr($valores, 0, -1);

        // realiza o insert
        $sql = "INSERT INTO `tbl_itens_doador`( `fk_Itens_id`, `fk_Doador_id`, `cont_Quantidade`,`status_doacao`) VALUES $valores";

        $res = mysqli_query($con, $sql) or die("Erro no sql ou con");
        if ($res) {
            $_SESSION['sucesso'] = 6;
            header('location: ../usuDoar.php?id=' . $_SESSION['ultimaCampanha']);
        } else {
            $_SESSION['erro'] = 14;
            header('location: ../usuDoar.php?id=' . $_SESSION['ultimaCampanha']);
        }
    }
} else {
    header('location: usuCampanhas.php');
}
