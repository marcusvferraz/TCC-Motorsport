    q<?php
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

    <div class="carousel carousel-slider center">
      <div class="carousel-fixed-item center">
      </div>
      <div class="carousel-item red white-text">
        <img src="img/slide1.png">
      </div>
      <div class="carousel-item amber white-text">
        <img src="img/vinho1.jpg">
      </div>
      <div class="carousel-item green white-text">
        <img src="img/vinho2.jpg">
      </div>
      <div class="carousel-item blue white-text">
        <img src="img/vinho3.jpg">
      </div>
    </div>


    <br>
    <br>
  
    <div class="row ">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <span class="card-title  black-text">Qual é a origem do vinho?</span>
          </div>
          <div class="card-content">
            <p>Há indícios de que o vinho exista há mais de 7.000 anos, e sua origem mais provável é no Oriente Médio, na região onde hoje se localizam Síria, Líbano e Jordânia.</p>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="row ">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <span class="card-title  black-text">Qual é o vinho mais antigo do mundo?</span>
          </div>
          <div class="card-content">
            <p>A garrafa mais antiga do mundo, ainda lacrada, tem 1693 anos, mas seu vinho está estragado. Ela é do ano 325, mas só foi encontrada em 1867, em Speyer, Alemanha, e virou peça do museu local – ou seja, não está à venda. Já o vinho comercial mais antigo é outra história. Ele é de 1735: o Porto Hunt's, de Portugal.</p>
          </div>
        </div>
      </div>
    </div>
  </header>



</body>
<script src="js/materialize.js"></script>
<script>
  M.AutoInit();
</script>

</html>