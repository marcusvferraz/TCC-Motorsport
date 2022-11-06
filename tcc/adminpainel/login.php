<?php
    include('../connect/connection.php');

    if(isset($_POST["login"])){
        $email = mysqli_real_escape_string($connect, trim($_POST['email']));
        $password = trim($_POST['password']);

        $sql = mysqli_query($connect, "SELECT * FROM tbl_login where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["status"] == 0){
                    ?>
                    <script>
                        alert("Por favor verifique sua conta para depois Logar");
                    </script>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    ?>
                    <script>
                        alert("Login Feito com Sucesso!");
                    </script>
                    
                    <?php
            session_start();
            $_SESSION["email"] = $email;
                    echo "<script type='text/javascript'>
                    window.location.href = 'http://localhost/tcc/adminpainel/adminpainel.php';
                    </script>";
                }else{
                    ?>
                    <script>
                        alert("email ou senha invalida, porfavor tenta novamente.");
                    </script>
                    <?php
                }
            }
                
    }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <!---SEPARACAO--->
    <br>
    <br>
    <br>
<!--GRID-->    
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
      <!--SEPARACAO CARD-->
      <div class="card" style="width: 30rem;">
  <img src="img_login/img_login.png" class="card-img-top" alt="...">
  <div class="card-body">
  <form action="#" method="POST" name="login">
  <div class="mb-3">
      
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
    <div id="emailHelp" class="form-text">Por favor registre um Email valido</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" id="password" class="form-control" name="password" required>
    <i class="bi bi-eye-slash" id="togglePassword"></i>
  </div>
  <center>
  <div class="col-md-6 off set-md-4">
   <button type="submit" value="Login" name="login" class="btn btn-primary">Logar</button>
   <a href="recover_psw.php" class="btn btn-link">Esqueceu sua senha?</a> </div>
</center>
<div id="emailHelp" class="form-text">Caso não possua um registro clique em  <a href="../register.php" class="card-link">registrar</a> </div>

</form>
  </div>
</div>
  <!--SEPARACAO CARD-->
    </div>
    <div class="col">
      
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>