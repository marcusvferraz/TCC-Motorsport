<?php session_start();
$_SESSION['sucesso'] = '';
$_SESSION['erro'] = '';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link de inicio -->
    <?php require_once('linkInicio.php'); ?>

    <!-- CSS ADCIONAL -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body class="bg-white">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-md fixed-top menu-navegacao ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/svgIcon/logoDoar.svg" width="30px">Do Ar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon align-itens-center justify-content-center d-flex"><img src="img/svgIcon/menu.png" width="35px"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="slCampanhas.php">Campanhas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ativo" aria-current="page" href="slEntCards.php">Organizações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="slSobre.php">Sobre</a>
                        </li>
                    </ul>
                    <a href="login.php"><button class="btn btn-primary">Entrar</button></a>
                </div>
            </div>
        </nav>
    </header>
    <!-- fim do heaader -->

    <div class="container mt-5">
        <div class="ocupa-espaco"></div>

        <!-- BUSCAR -->
        <div class=" row">
            <label for="html5-search-input" class="form-label">buscar</label>
            <div class="col-12">
                <form action="" method="POST" class="d-flex ">
                    <input class="form-control" type="search" placeholder="Digite..." id="html5-search-input" name="pesquisar" />
                    <button type="submit" class="btn btn-primary"><img src="img/svgIcon/buscar.png" class="icone-filtro"></button>
                </form>
            </div>
        </div>
        <!-- /BUSCAR -->

        <!-- CARD DA INSTITUICAO -->
        <div class="row  mt-5 ">
            <?php
            $ativo = 1;
            include_once('conexao/Conexao.php');
            if ($_POST) {
                $ps = $_POST['pesquisar'];

                $sql = "SELECT  `org_Id`,  `org_NomeFantasia`,`org_Telefone1`, `org_Telefone2`, `org_Celular`,`org_ImagemLogo` FROM `tbl_organizacao` where org_ativo = $ativo   and org_NomeFantasia like '%$ps%'";
            } else {

                $sql = "SELECT  `org_Id`,  `org_NomeFantasia`,`org_Telefone1`, `org_Telefone2`, `org_Celular`,`org_ImagemLogo` FROM `tbl_organizacao` where org_ativo = $ativo ";
            }
            $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

            while ($dados = mysqli_fetch_array($rs)) {
                $id = $dados['org_Id'];

                echo '
                   <div class=" mb-3 m-2 card-inst-simples">
                        <div class="header justify-content-center align-items-center d-flex">
                            <div class="imagem-logo">
                                <img src="img/imagemUsuario/orgPerfil/' . $dados['org_ImagemLogo'] . '"  width="100%" class="imagem-logo">
                            </div>
                        </div>
                        <div class="body ">
                            <span class="titulo">' . $dados['org_NomeFantasia'] . '</span>
                            <span class=" telefone">' . $dados['org_Telefone1'] . '</span>
                            <div class="justify-content-center d-flex">
                                <a href="slEntDetalhes.php?id=' . $id . '">
                                    <button type="button" class="btn btn-sm btn-primary">Ver Mais</button>
                                </a>
                            </div>
                      </div>
                    </div>
                ';
            }
            ?>
        </div>
        <!-- /CARD DA INSTITUICAO -->
    </div>

    <!-- FOOTER -->
    <?php require_once('footer.php'); ?>
    <!-- LINKS FIM -->
    <?php require_once('linkFinal.php'); ?>

    <!-- cdn jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- minhas mascaras -->
    <script src="assets/js/mascara.js"></script>
</body>

</html>