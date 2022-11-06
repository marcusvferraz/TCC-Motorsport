<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="#">
  <!--- Import Materialize ----->
  <link rel="stylesheet" href="css/materialize.css">
  <!--- Import Google  Icon Font ----->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Ke Vinho</title>
</head>

<body>

  <header>

    
     <!-- Dropdown Structure -->
     <ul id="dropdown1" class="dropdown-content black-text">
      <li><a href="regiaoform.php">Cadastrar</a></li>
      <li><a href="regiaoselect.php">Visualizar</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content black-text ">
      <li><a href="produtorform.php">Cadastrar</a></li>
      <li><a href="produtorselect.php">Visualizar</a></li>
    </ul>

    <ul id="dropdown3" class="dropdown-content black-text ">
      <li><a href="vinhoform.php">Cadastrar</a></li>
      <li><a href="vinhoselect.php">Visualizar</a></li>
    </ul>

    <nav>
      <div class="nav-wrapper white">
        <a href="home.php" class="brand-logo">Ke Vinho
          <img src="img/logokevinho.png">
        </a>
        <ul class="right hide-on-med-and-down ">
          <li><a class="black-text" href="home.php">Home</a></li>
          <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">Região<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown2">Produtor<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown3">Vinho<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="black-text" href="sobre.php">Sobre</a></li>
          <li><a class="black-text" href="sair.php">Sair</a></li>
          <!-- Dropdown Trigger -->

        </ul>
      </div>
    </nav>

  </header>

  <?php
    echo "<p>Seja bem vindo, ". $_SESSION['email']. " espero que goste do site!</p>";
?>

</body>
<script src="js/materialize.js"></script>
<script>
  M.AutoInit();
</script>

</html>