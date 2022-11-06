<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

if ($_GET) {
    $id = $_GET["id"];
    include "conexao.php";
    $sql = "DELETE FROM produtor WHERE pro_id = $id";
    $res = mysqli_query($con, $sql) or die('Erro no delete produtor');
    if ($res) {
        echo "<script>alert('Excluido a Região com sucesso!!');</script>";
        header("location: produtorform.php");
    } else {
        echo "<script>alert('Exclusão não realizada!!');</script>";
    }
    mysqli_close($con);
    header("refresh: 0, produtorselect.php");
}
?>