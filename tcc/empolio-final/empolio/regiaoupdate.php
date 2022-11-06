<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

if ($_GET) {
    $id = $_GET['id'];
    include "conexao.php";
    $sql = "SELECT * FROM regiao WHERE REG_ID = '" . $id . "'";
    $dados = mysqli_query($con, $sql);
    if ($res = mysqli_fetch_array($dados)) {
        $desc = $res['REG_DESIG'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="#">
    <!--- Import Materialize ----->
    <link rel="stylesheet" href="css/materialize.css">
    <!--- Import Google  Icon Font ----->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Atualizar Região</title>
</head>

<body>

    <div class="container">

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

            <h1>Atualizar Região</h1>





            <!--FORMULÁRIO DE CADASTRO-->
            <section class="content">
                <div id="centered">
                    <form name="cadastro" action="" method="POST">
                        <h1>Região do Vinho</h1>
                        <input id="txtid" name="txid" type="hidden" class="validate" placeholder="Veneza" value="<?php echo $id; ?>" required>
                        <p>
                            <label for="regi_cad">Região</label>
                            <input id="regi_cad" name="txtdesc" type="text" class="validate" placeholder="Veneza" value="<?php echo $desc; ?>" required>
                        </p>
                        <p>
                            <input type="submit" value="Atualizar" />
                        </p>
                    </form>
                </div>
            </section>
        </header>
    </div>

</body>
<script src="js/materialize.js"></script>
<script>
    M.AutoInit();
</script>

</html>

<?php
if ($_POST) {
    session_start();
    include "conexao.php";
    $regiao = $_POST["regiao"];
    $desc = $_POST["txtdesc"];

    $sql = "UPDATE regiao SET REG_DESIG = '" . $desc . "' WHERE REG_ID = '" . $id . "' ";
    $res = mysqli_query($con, $sql) or die('Erro no update regiao');
    if ($res) {
        echo "<script>alert('Atualização da Região realizado com sucesso!!');</script>";
        header("location: regiaoform.php");
    } else {
        echo "<script>alert('Atualização não realizado!!');</script>";
    }
}
?>