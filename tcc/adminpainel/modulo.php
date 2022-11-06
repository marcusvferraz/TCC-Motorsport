<?php
include "../conexao.php";
 if(
  !empty($_GET['tipo'])
 ){
  $tipo = $_GET['tipo'];
  $sql = "SELECT * FROM tbl_marca where tbl_Tipo_Veiculo_tipo_id=$tipo";
  $res = mysqli_query($con, $sql);
  $resultado = array(
    "nomes"=>[],
    "ids"=> []
  );
  while($dado = mysqli_fetch_array($res)){
    array_push($resultado['nomes'], $dado['Mar_Nome']);
    array_push($resultado['ids'], $dado['Mar_Id']);
  }
  echo json_encode($resultado);
 }

 if(
  !empty($_GET['marca'])
 ){
  $marca = $_GET['marca'];
  $sql = "SELECT * FROM tbl_modelo where fk_tbl_Marca_tbl_Modelo=$marca";
  $res = mysqli_query($con, $sql);
  $resultado = array(
    "nomes" => [],
    "ids" => []
  );
  while($dado = mysqli_fetch_array($res)){
    array_push($resultado['nomes'], $dado['Mod_Nome']);
    array_push($resultado['ids'], $dado['Mod_Id']);
  }
  echo json_encode($resultado);
 }

 if(
  !empty($_GET['acessorios'])
 ){
  $acessorio = $_GET['acessorios'];
  $tipo = $_GET['tipovei'];
  $sql = "SELECT * FROM tbl_acessorios where tbl_Tipo_Veiculo_tipo_id=$tipo";
  $res = mysqli_query($con, $sql);
  $resultado = array(
    "nomes" => [],
    "ids" => []
  );
  while($dado = mysqli_fetch_array($res)){
    array_push($resultado['nomes'], $dado['Aces_Nome']);
    array_push($resultado['ids'], $dado['Aces_Id']);

  }
  echo json_encode($resultado);
 }


 if(
  !empty($_GET['cor'])
 ){
  $cor = $_GET['cor'];
  $sql = "SELECT * FROM  tbl_cor where Cor_Id=$cor";
  $res = mysqli_query($con, $sql);
  $resultado = array(
    "nomes" => [],
    "ids" => []
  );
  while($dado = mysqli_fetch_array($res)){
    array_push($resultado['nomes'], $dado['Cor_Nome']);
    array_push($resultado['ids'], $dado['Cor_Id']);
  }
  echo json_encode($resultado);
 }




 if(
  !empty($_GET['combustivel'])
 ){
  $com = $_GET['combustivel'];
  $sql = "SELECT * FROM  tbl_combustivel where Com_Id=$com";
  $res = mysqli_query($con, $sql);
  $resultado = array(
    "nomes" => [],
    "ids" => []
  );
  while($dado = mysqli_fetch_array($res)){
    array_push($resultado['nomes'], $dado['Com_Nome']);
    array_push($resultado['ids'], $dado['Com_Id']);
  }
  echo json_encode($resultado);
 }



 
 if(
  !empty($_GET['ano'])
 ){
  $ano = $_GET['ano'];
  $sql = "SELECT * FROM  tbl_ano where Ano_Id=$ano";
  $res = mysqli_query($con, $sql);
  $resultado = array(
    "nomes" => [],
    "ids" => []
  );
  while($dado = mysqli_fetch_array($res)){
    array_push($resultado['nomes'], $dado['Ano_Ano']);
    array_push($resultado['ids'], $dado['Ano_Id']);
  }
  echo json_encode($resultado);
 }





?>