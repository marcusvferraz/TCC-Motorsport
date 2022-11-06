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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="#">
    <!--- Import Materialize ----->
    <link rel="stylesheet" href="css/materialize.css">
    <!--- Import Google  Icon Font ----->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Cadastrar Região</title>
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

            <h1>Cadastrar Região</h1>





            <!--FORMULÁRIO DE CADASTRO-->
            <section class="content">
                <div id="centered">
                    <form name="cadastro" action="" method="POST">
                        <h1>Região do Vinho</h1>

                        <p>
                            <label for="nome_cad">Região</label>
                            <input id="nome_cad" name="regiao" required="required" type="text" placeholder="Veneza" />
                        </p>
                        <p>
                            <input type="submit" value="Salvar" />
                        </p>
                    </form>
                </div>
                <!--INICIO TABLE-->
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Região</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM regiao";
                        $res = mysqli_query($con, $sql) or die('Erro no select login');
                        while ($dados = mysqli_fetch_array($res)) {
                            $id = $dados['REG_ID'];
                            $regnome = $dados['REG_DESIG'];
                            echo "<tr>
                                    <td>" . $dados['REG_ID'] . "</td>
                                    <td>" . $dados['REG_DESIG'] . "</td>
                                   <td><a href='regiaoupdate.php?id=$id'class='btn-floating btn-large waves-effect waves-light gray'><i class='material-icons'>edit</i></a></td>
                                   <td><a href='regiaodelete.php?cod=$id' class='btn-floating btn-large waves-effect waves-light red'><i class='material-icons'>delete</i></a></td>
                                </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </section>
    </div>
    <!--FIM TABLE-->

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

    include "conexao.php";
    $regiao = $_POST["regiao"];


    $sql = "INSERT INTO regiao (REG_DESIG) VALUES ('" . $regiao . "')";
    $res = mysqli_query($con, $sql) or die('Erro no insert regiao');
    if ($res) {
        echo "<script>alert('Cadastro da Região realizado com sucesso!!');</script>";
    } else {
        echo "<script>alert('Cadastro não realizado!!');</script>";
    }
}
?>