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
    <title>Cadastrar Produtor</title>
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
            <h1>Cadastrar Produtor</h1>





            <!--FORMULÁRIO DE CADASTRO-->
            <section class="content">
                <div id="centered">
                    <form name="cadastro" action="" method="POST">
                        <h1>Dados Produtor</h1>

                        <p>
                            <label for="nome_cad">Nome</label>
                            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Don Perrion" />
                        </p>
                        <p>
                            <label for="morada_cad">Morada</label>
                            <input id="morada_cad" name="morada" required="required" type="text" placeholder="Genuie" />
                        </p>
                        <p>
                            <label for="telefone_cad">Telefone</label>
                            <input id="telefone_cad" name="telefone" required="required" type="number" placeholder="12992539073" />
                        </p>
                        <p>
                            <label for="email_cad">Email</label>
                            <input id="email_cad" name="email" required="required" type="email" placeholder="joao@gmail.com" />
                        </p>

                        <div class="input-field col s12">
                            <select name="txtregiao">
                                <option value="" disabled selected>Escolha a Região</option>
                                <?php
                                include "conexao.php";
                                $sql = "SELECT * FROM regiao";
                                $res = mysqli_query($con, $sql) or die("Erro no select região");
                                while ($dados = mysqli_fetch_array($res)) {
                                    $id = $dados['REG_ID'];
                                    echo "<option value=" . $dados['REG_ID'] . ">" . $dados['REG_DESIG'] . "</option> ";
                                }
                                ?>
                            </select>
                            <label>Região</label>
                        </div>

                        <p>
                            <input type="submit" value="Salvar" />
                        </p>
                    </form>
                </div>
                <!--INICIO TABLE REG_DESIG,pro_id,pro_nome,pro_morada,pro_telefone,pro_email-->
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Morada</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Região</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM produtor,regiao WHERE fk_reg_id = REG_ID order by (pro_id)";
                        $res = mysqli_query($con, $sql) or die('Erro no select login');
                        while ($dados = mysqli_fetch_array($res)) {
                            $id = $dados['pro_id'];
                            echo "<tr>
                                    <td>" . $dados['pro_id'] . "</td>
                                    <td>" . $dados['pro_nome'] . "</td>
                                    <td>" . $dados['pro_morada'] . "</td>
                                    <td>" . $dados['pro_telefone'] . "</td>
                                    <td>" . $dados['pro_email'] . "</td>
                                    <td>" . $dados['REG_DESIG'] . "</td>
                                    <td><a href='produtorupdate.php?id=$id'class='btn-floating btn-large waves-effect waves-light gray'><i class='material-icons'>edit</i></a></td>
                                    <td><a href='produtordelete.php?id=$id' class='btn-floating btn-large waves-effect waves-light red'><i class='material-icons'>delete</i></a></td>
                                </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </section>
    </div>
    <!--FIM TABLE-->

</body>
<script src="js/materialize.js"></script>
<script>
    M.AutoInit();
</script>

</html>

<?php
if ($_POST) {
    include "conexao.php";
    $nome = $_POST["nome"];
    $morada = $_POST["morada"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $regiao = $_POST["txtregiao"];

    $sql = "INSERT INTO produtor (pro_nome,pro_morada,pro_telefone,pro_email,fk_reg_id) VALUES ('" . $nome . "','" . $morada . "','" . $telefone . "','" . $email . "','" . $regiao . "')";
    $res = mysqli_query($con, $sql) or die('Erro no insert produtor');
    if ($res) {
        echo "<script>alert('Cadastro do Produtor realizado com sucesso!!');</script>";
    } else {
        echo "<script>alert('Cadastro não realizado!!');</script>";
    }
    mysqli_close(($con));
}
?>