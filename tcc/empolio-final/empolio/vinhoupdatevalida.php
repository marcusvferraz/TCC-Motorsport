<?php
if($_POST) {
  include "conexao.php";
  $nome = $_POST["nome"];
  $ano = $_POST["ano"];
  $cor = $_POST["cor"];
  $grau = $_POST["grau"];
  $preco = $_POST["preco"];
  $fkpid = $_POST["txtnomepro"];
  $id = $_POST["id"];

  $sql = "UPDATE  vinho set vin_nome = '$nome', vin_ano = '$ano', vin_cor = '$cor', vin_grau = '$grau', vin_preco = '$preco', fk_pro_id = '$fkpid' WHERE vin_id = $id"; 
  $pr = mysqli_query($con, $sql) or die("Erro no select login");
  if($pr){
   echo "<script>alert('Vinho atualizado com sucesso!!');</script>";
   //header("<meta http-equiv='refresh' content='0; URL='vinhoform.php'/>");
   header("location: vinhoform.php");
  } else {
    echo "<script>alert('Vinho não atualizado!!');</script>";
  }
  
}
?>