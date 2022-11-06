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
            <h1>Cadastrar Vinho</h1>





            <!--FORMULÁRIO DE CADASTRO-->
            <section class="content">
                <div id="centered">
                    <form name="cadastro" action="" method="POST" enctype="multipart/form-data">
                        <h1>Dados Vinho</h1>

                        <p>
                            <label for="nome_cad">Nome</label>
                            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Don Perrion" />
                        </p>
                        <p>
                            <label for="ano_cad">Ano</label>
                            <input id="ano_cad" name="ano" required="required" type="number" placeholder="1976" />
                        </p>
                        <p>
                            <label for="cor_cad">Cor</label>
                            <input id="cor_cad" name="cor" required="required" type="text" placeholder="Tinto" />
                        </p>
                        <p>
                            <label for="grau_cad">Grau</label>
                            <input id="grau_cad" name="grau" required="required" type="number" placeholder="11" />
                        </p>
                        <p>
                            <label for="preco_cad">Preco</label>
                            <input id="preco_cad" name="preco" required="required" type="number" placeholder="50" />
                        </p>
                        <p>
                            <label for="imagem_cad">Imagem</label>
                            <input id="imagem_cad" name="imagem" required="required" type="file" placeholder="" />
                            <!-- <input  id="imagem_cad" name="imagem" required="required" type="file" placeholder="" > --->
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
                                    echo "<option value=" . $dados['pro_id'] . ">" . $dados['pro_nome'] . "</option> ";
                                }
                                ?>
                            </select>
                            <label>Nome Produtor</label>
                        </div>

                        <p>
                            <input type="submit" value="Salvar" />
                        </p>
                    </form>

                </div>
                </section>
                    <div class="row">

                        <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM vinho,produtor WHERE fk_pro_id = pro_id order by (vin_id)";
                        $rs = mysqli_query($con, $sql) or die("Erro no select vinho");
                        while ($dados = mysqli_fetch_array($rs)) {
                            $id = $dados['vin_id'];
                            echo "  
                            <div class='col s4'>
                            <div class='card-panel white'>
                            <div class='card-body center'>
                
                            <img src='img/$dados[vin_img]' class='card-img' width= '200px' height= '290px' >
                            <h5 class='card-title'>$dados[vin_nome]</h5>
                
                            <p class='card-text'>Preço: R$ $dados[vin_preco]</p>
                            <p class='card-text'>Cor: $dados[vin_cor]</p>
                            <p class='card-text'>Ano: $dados[vin_ano]</p>
                            <p class='card-text'>Grau: $dados[vin_grau]</p>
                            <p class='card-text'>Nome Produtor: $dados[pro_nome]</p>
                            <!-- Button trigger modal -->
                
                            <a href='vinhoupdate.php?id=$id'>
                                <button type='button' class='btn btn-info text-white'  data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                                Editar
                                </button>
                            </a>
                            <a href='vinhodelete.php?id=$id'>
                                <button type='button' class='btn btn-info text-white'  data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                                Apagar
                                </button>
                            </a>
                            </div>
                            </div>
                            </div>";
                        }
                        mysqli_close($con);
                        ?>

           
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
    $ano = $_POST["ano"];
    $cor = $_POST["cor"];
    $grau = $_POST["grau"];
    $preco = $_POST["preco"];
    if ($_FILES["imagem"]['name']) {
        $imagem = $_FILES["imagem"]['name'];
    } else {
        $imagem = "";
    }
    $fkpid = $_POST["txtnomepro"];

    $sql = "INSERT INTO vinho (vin_nome,vin_ano,vin_cor,vin_grau,vin_preco,fk_pro_id,vin_img) VALUES ('" . $nome . "','" . $ano . "','" . $cor . "','" . $grau . "','" . $preco . "','" . $fkpid . "','" . $imagem . "')";
    $res = mysqli_query($con, $sql) or die('Erro no insert vinho');
    if ($res) {
        echo "<script>alert('Cadastro do Vinho realizado com sucesso!!');</script>";
    } else {
        echo "<script>alert('Cadastro não realizado!!');</script>";
    }
    mysqli_close(($con));
}
?>