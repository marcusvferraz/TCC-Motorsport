<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: index.php");
}

if($_GET){
    $id = $_GET['id'];
    include "conexao.php";
    

    $sql = "DELETE  FROM vinho WHERE vin_id = $id";
    $rs = mysqli_query($con, $sql) or die("Erro no delete produtor");
    if($rs){
     echo "<script>alert('Vinho excluido com sucesso!!');</script>";
    } else {
      echo "<script>alert('Vinho não excluido!!');</script>";
    }
    mysqli_close($con);
    header("refresh: 0, vinhoselect.php");
}
?>