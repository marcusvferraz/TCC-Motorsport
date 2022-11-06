<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'bd_vinho';
$con      = mysqli_connect($servidor,$usuario,$senha,$banco) or die ('Erro na url de conexão do banco de dados');
?>