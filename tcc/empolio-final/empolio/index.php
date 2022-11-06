
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
     
      <div id="login">
      <form name="login"action="" method="POST"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome" required="required" type="text" placeholder="ex. João Victor"/>
          </p>
           
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email" required="required" type="email" placeholder="ex. joaolindo@gmail.com" /> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. joaolindo123"/>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
         
          <p class="link">
            Ainda não tem conta?
            <a href="usuarioform.php">Cadastre-se</a>
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
  include ('conexao.php');
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuario WHERE usu_nome = '".$nome."' and usu_email = '".$email."' and usu_senha = '".$senha."'";
  $res = mysqli_query($con,$sql) or die('Erro no select login');
  if($dados = mysqli_fetch_array($res)){
    $_SESSION["email"] = $dados['usu_email'];
    header("location: home.php");
}else{
  header("location: index.php");
}
}
?>