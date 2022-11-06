<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div class="container" >

<div class="content">   

<!--FORMULÁRIO DE CADASTRO-->

<div id="cadastro">
<form name="cadastro"action="" method="POST">  
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="joao" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="joaolindo@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. joaolindo123"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="index.php"> Ir para Login </a>
          </p>
        </form>
      </div>
      </div>
  </div>
</body>
</html>

<?php
 if($_POST){
   session_start();
   include "conexao.php";
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $sql = "INSERT INTO usuario (usu_nome,usu_email,usu_senha) VALUES ('".$nome."','".$email."','".$senha."')";
   $res = mysqli_query($con,$sql) or die('Erro no select login');
   if($res){
     echo "<script>alert('Cadastro realizado com sucesso!!');</script>";
     header("location: index.php");
 }else{
   header("location: usuarioform.php");
 }
 }
?>