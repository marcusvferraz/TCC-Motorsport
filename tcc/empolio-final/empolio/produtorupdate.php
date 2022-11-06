<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

if ($_GET) {
    $id = $_GET['id'];
    include "conexao.php";
    $sql = "SELECT * FROM produtor WHERE pro_id =$id";
    $dados = mysqli_query($con, $sql);
    if ($res = mysqli_fetch_array($dados)) {
        $id = $res['pro_id'];
        $nome = $res['pro_nome'];
        $morada = $res['pro_morada'];
        $telefone = $res['pro_telefone'];
        $email = $res['pro_email'];
        $regiao = $res['fk_reg_id'];
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
    <title>Atualizar Produtor</title>
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


            <!--FORMULÁRIO DE CADASTRO-->
            <section class="content">
                <div id="centered">

                    <h1>Atualizar Produtor</h1>
                    <div id="centered">
                        <form name="cadastro" action="" method="POST">
                            <h1>Dados Produtor</h1>
                            <input id="txtid" name="txtid" type="hidden" class="validate" value="<?php echo $id; ?>" required>
                            <p>
                                <input id="txtnome" name="txtnome" type="text" class="validate" value="<?php echo $nome; ?>" required>
                                <label for="lblnome">Nome</label>
                            </p>
                            <p>
                                <input id="txtmor" name="txtmor" type="text" class="validate" value="<?php echo $morada; ?>" required>
                                <label for="lblmor">Morada</label>
                            </p>
                            <p>
                                <input id="txttel" name="txttel" type="tel" class="validate" value="<?php echo $telefone; ?>" required>
                                <label for="lbltel">Telefone</label>
                            </p>
                            <p>
                                <input id="txtemail" name="txtemail" type="text" class="validate" value="<?php echo $email; ?>" required>
                                <label for="lblemail">Email</label>
                            </p>

                            <!-- Carregando Select -->
                            <div class="input-field col s12">
                                <select name="txtregiao">
                                    <option value="" disabled>Escolha a Região</option>
                                    <?php
                                    include "conexao.php";
                                    $sql = "SELECT * FROM regiao";
                                    $res = mysqli_query($con, $sql) or die("Erro no select região");
                                    while ($dados = mysqli_fetch_array($res)) {
                                        if ($dados['REG_ID'] == $regiao) {
                                            echo "<option value=" . $dados['REG_ID'] . " selected>" . $dados['REG_DESIG'] . "</option> ";
                                        } else {
                                            echo "<option value=" . $dados['REG_ID'] . ">" . $dados['REG_DESIG'] . "</option> ";
                                        }
                                    }
                                    ?>
                                </select>
                                <label>Região</label>
                            </div>
                            <p>
                        <input type="submit" value="Atualizar" />
                    </p>
                        </form>
                    </div>
                  
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
    include "conexao.php";
    $nome = $_POST['txtnome'];
    $morada = $_POST['txtmor'];
    $telefone = $_POST['txttel'];
    $email = $_POST['txtemail'];
    $regiao = $_POST["txtregiao"];

    
    $sql = "UPDATE produtor SET pro_nome = '$nome', pro_morada= '$morada', pro_telefone='$telefone', pro_email='$email', fk_reg_id=$regiao WHERE pro_id = $id";
    $res = mysqli_query($con, $sql) or die('Erro no update produtor');
    if ($res) {
        echo "<script>alert('Atualização do Produtor realizado com sucesso!!');</script>";
    } else {
        echo "<script>alert('Atualização não realizada!!');</script>";
    }
}
?>