<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="#">
    <link rel="stylesheet" href="css/loginadmin.css">
     <link rel="stylesheet" href="css/materialize.css">
    <!--- Import Google  Icon Font ----->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color:#e9e9e9;">
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col">
      
    

<div class="login-box">
  <h2>Login</h2>
  <form action="loginvalida.php" method="POST">
    <div class="user-box">
      <input type="text" name="txtemail" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="txtsenha" required>
      <label>Password</label>
    </div>
    <a href="loginvalida.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Entrar
    </a>

    
    
    <center>
  <p class="text-muted">
 Caso não tenha uma conta clique em  <a href="registro.php" class="text-reset">cadastro</a>
</p>
</center>
  </form>
</div>
</div>
  </div>
  </center>
</div>
    </div>
  </div>
</div>
<script src="js/materialize.js"></script>
    <script>
        M.AutoInit();
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


