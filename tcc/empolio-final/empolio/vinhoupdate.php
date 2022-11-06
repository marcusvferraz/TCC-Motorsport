<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

if ($_GET) {
    $id = $_GET['id'];
    include "conexao.php";
    $sql = "SELECT * FROM vinho,produtor WHERE vin_id =$id";
    $dados = mysqli_query($con, $sql);
    if ($res = mysqli_fetch_array($dados)) {
        $idv =   $res["vin_id"];
        $nome = $res['vin_nome'];
        $ano = $res['vin_ano'];
        $cor = $res['vin_cor'];
        $grau = $res['vin_grau'];
        $preco = $res['vin_preco'];
        $fkpid = $res['fk_pro_id'];
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
    <title>Cadastrar Vinho</title>
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

            <h1>Atualizar Vinho</h1>

            <!--FORMULÁRIO DE CADASTRO-->
            <section class="content">
                <div id="centered">
                    <form name="cadastro" action="vinhoupdatevalida.php" method="POST" enctype="multipart/form-data">
                        <h1>Dados Vinho</h1>

                        <input id="nome_cad" name="id" required="required" type="hidden" value="<?php echo $id; ?>" />


                        <p>
                            <label for="nome_cad">Nome</label>
                            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Don Perrion " value="<?php echo $nome; ?>" />
                        </p>
                        <p>
                            <label for="ano_cad">Ano</label>
                            <input id="ano_cad" name="ano" required="required" type="number" placeholder="1976" value="<?php echo $ano; ?>" />
                        </p>
                        <p>
                            <label for="cor_cad">Cor</label>
                            <input id="cor_cad" name="cor" required="required" type="text" placeholder="Tinto" value="<?php echo $cor; ?>" />
                        </p>
                        <p>
                            <label for="grau_cad">Grau</label>
                            <input id="grau_cad" name="grau" required="required" type="number" placeholder="11" value="<?php echo $grau; ?>" />
                        </p>
                        <p>
                            <label for="preco_cad">Preco</label>
                            <input id="preco_cad" name="preco" required="required" type="number" placeholder="50" value="<?php echo $preco; ?>" />
                        </p>

                        <div class="input-field col s12">
                            <select name="txtnomepro">
                                <option value="" disabled selected>Escolha o Nome</option>
                                <?php
                                include "conexao.php";
                                $sql = "SELECT * FROM produtor";
                                $res = mysqli_query($con, $sql) or die("Erro no select nome");
                                while ($dados = mysqli_fetch_array($res)) {
                                    $id = $dados['pro_id'];
                                    $pronome = $dados['pro_nome'];
                                    if ($fkpid == $id) {
                                        echo "<option value=" . $dados['pro_id'] . " selected>" . $dados['pro_nome'] . "</option> ";
                                    } else {
                                        echo "<option value=" . $dados['pro_id'] . ">" . $dados['pro_nome'] . "</option> ";
                                    }
                                }
                                ?>
                            </select>
                            <label>Nome Produtor</label>
                        </div>
                </div>

                <p>
                    <input type="submit" value="Salvar" />
                </p>
                </form>
    </div>

    <script src="js/materialize.js"></script>
    <script>
        M.AutoInit();
    </script>

</body>

</html>