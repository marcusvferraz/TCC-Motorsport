<?php session_start() ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Verification</title>
</head>
<body>


<main class="login-form">
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
      <!--SEPARACAO CARD-->
      <div class="card" style="width: 30rem;">
  <img src="adminpainel/img_login/img_login.png" class="card-img-top" alt="...">
  <div class="card-body">
  <form action="#" method="POST">
  <div class="mb-3">
      
    <label for="exampleInputEmail1" class="form-label">Verificar Conta</label>
    <input type="text" id="otp" class="form-control" name="otp_code" required autofocus>
    <div id="emailHelp" class="form-text">Por favor Insira um Codigo OTP Válido</div>
  </div>

  <center>
  <div class="col-md-6 off set-md-4">
   <button type="submit" value="Verify" name="verify" class="btn btn-dark">Verificar</button>
   
</center>

</form>
  </div>
</div>
  <!--SEPARACAO CARD-->
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
</main>
</body>
</html>
<?php 
    include('connect/connection.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Codigo OTP Inválido");
           </script>
           <?php
        }else{
            mysqli_query($connect, "UPDATE tbl_login SET status = 1 WHERE email = '$email'");
            ?>
             <script>
                 alert("Conta Verificada!!");
                   window.location.replace("login.php");
             </script>
             <?php
        }

    }

?>