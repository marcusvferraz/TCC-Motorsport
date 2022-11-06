<?php
if ($_GET) {
    include "conexao.php";
    $codreg = $_GET["cod"];


    $sql = "DELETE FROM regiao WHERE REG_ID = '" . $codreg . "'";
    $res = mysqli_query($con, $sql) or die('Erro no insert regiao');
    if ($res) {
        echo "<script>alert('Excluido a Região com sucesso!!');</script>";
        header("location: regiaoform.php");
    } else {
        echo "<script>alert('Exclusão não realizada!!');</script>";
    }
}
?>