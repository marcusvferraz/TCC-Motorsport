<?php session_start(); ?>
<?php
    include('connect/connection.php');

    if(isset($_POST["register"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $check_query = mysqli_query($connect, "SELECT * FROM tbl_login where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("Já existe um usuário com este email!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($connect, "INSERT INTO tbl_login (email, password, status) VALUES ('$email', '$password_hash', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='motorsporttcc@gmail.com';
                    $mail->Password='vbipczjnwkuulqrh';
    
                    $mail->setFrom('motorsporttcc@gmail.com', 'Motor-Sport');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Seu codigo de verificacao";
                    $mail->Body="<p>Querido Usuário, </p> <p>seu código OTP de verificação é $otp <br></p>
                    <br><br>
                    <p>
                    Atenciosamente</p>
                    <b>MotorSport TCC</b>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Registro Falhou, Email Invalido "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Email Enviado, Codigo OTP enviado para " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }

?>


<link href="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
  <img src="adminpainel/img_login/img_registro.png" class="card-img-top" alt="...">
  <div class="card-body">
  <form action="#" method="POST" name="register">
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
  <input type="submit" value="Register" name="register"  class="btn btn-dark">
  <a href="index.php" class="btn btn-dark">Voltar</a>
  <div id="emailHelp" class="form-text">Caso já possua um login <a href="login.php" class="card-link">clique aqui!</a> </div>
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







<img src="adminpainel/img_login/img_login.png" class="card-img-top" alt="...">
  <div class="card-body">
    <form action="#" method="POST" name="login">
  <div class="mb-3">   
  <div class="form-group row">
                  <label for="email_address" class="col-md-4 col-form-label text-md-right">Codigo OTP</label>
                  <div class="col-md-6">
                   <input type="text" id="otp" class="form-control" name="otp_code" required autofocus>
                   </div>
   </div>
 
  <center>
  <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Verify" name="Verificar" class="btn btn-dark">
                            </div>
</center>
            </div>
</form>