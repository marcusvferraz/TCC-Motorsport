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
                            <a class="nav-link ativo" aria-current="page" href="slCampanhas.php">Campanhas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="slEntCards.php">Organizações</a>
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

        <div class="card bg-transparent mt-5 m-0 p-0" id="invisivel">
            <h3>Em andamento: </h3>
            <!-- CARD CAMPANHA ANDAMENTO-->
            <div class="row">

                <div class="container-card justify-content-start row row-cols-1 row-cols-md-3 g-4 ">
                    <?php
                    include_once('conexao/Conexao.php');
                    if ($_POST) {
                        $ps = $_POST['pesquisar'];

                        $sql = "SELECT * FROM `tbl_campanha`,`tbl_organizacao` where camp_Status = 'ativa' and org_Id=fk_Org_Campanha  and camp_Nome like '%$ps%'";
                    } else {

                        $sql = "SELECT * FROM `tbl_campanha`,`tbl_organizacao` where camp_Status = 'ativa' and org_Id=fk_Org_Campanha  order by camp_Nome";
                    }
                    $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

                    while ($dados = mysqli_fetch_array($rs)) {
                        $id = $dados['camp_Id'];

                        echo ' <div class="card-camp mb-5">
                                    <div class="card-header m-0 p-0" id="card-campanha-container-imagem">
                                        <img src="img/imagemUsuario/imgCampanha/' . $dados['camp_Imagem'] . '" class="card-img-top" >
                                    </div>
                                    <div class="card-body-camp mt-0">
                                        <span class=" tag mb-2">' . $dados["camp_TipoCausa"] . '</span>
                                        <h4 class="mb-4">
                                            ' . $dados["camp_Nome"] . '
                                        </h4>
                                        <div class=" d-flex  col-12 ">
                                        <div class="user  col-9 justify-content-center align-items-center">
                                        <img src="img/imagemUsuario/orgPerfil/' . $dados['org_ImagemLogo'] . '" />
                                            <div class="user-info col">
                                                 <span>' . $dados["org_NomeFantasia"] . '</span>
                                               
                                            </div>
                                        </div>
                                        <div class="justify-content-end d-flex  col-3">
                                            <a href="slCampanhaDetalhes.php?id=' . $id . '">
                                                <button class="btn align-self-end align-items-center d-flex p-0 justify-content-center" id="bt-circulo-icone">Mais</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    ?>

                </div>

                <!-- /CARD CAMPANHA ANDAMENTO -->
            </div>
            <hr class="mb-4">
            <h3>Encerradas: </h3>
            <!-- CARD CAMPANHA ENCERRADA -->

            <div class="row">
                <?php

                if ($_POST) {
                    $ps = $_POST['pesquisar'];

                    $sql2 = "SELECT * FROM `tbl_campanha`,`tbl_organizacao` where camp_Status = 'finalizada' and org_Id=fk_Org_Campanha  and camp_Nome like '%$ps%'";
                } else {

                    $sql2 = "SELECT * FROM `tbl_campanha`,`tbl_organizacao` where camp_Status = 'finalizada' and org_Id=fk_Org_Campanha  order by camp_Nome";
                }

                $rs2 = mysqli_query($con, $sql2) or die("Erro ao selecionar a campanha");

                while ($dados2 = mysqli_fetch_array($rs2)) {
                    $id2 = $dados2['camp_Id'];

                    echo ' <div class="card-camp  encerrado mb-5">
                                <div class="card-header m-0 p-0" id="card-campanha-container-imagem">
                                    <img src="img/imagemUsuario/imgCampanha/' . $dados2['camp_Imagem'] . '" class="card-img-top" >
                                </div>
                                <div class="card-body-camp mt-0">
                                    <span class=" tag mb-2">' . $dados2["camp_TipoCausa"] . '</span>
                                    <h4 class="mb-4">
                                        ' . $dados2["camp_Nome"] . '
                                    </h4>
                                    <div class=" d-flex  col-12 ">
                                    <div class="user  col-9 justify-content-center align-items-center">
                                    <img src="img/imagemUsuario/orgPerfil/' . $dados2['org_ImagemLogo'] . '" />
                                        <div class="user-info col">
                                             <span>' . $dados2["org_NomeFantasia"] . '</span>
                                           
                                        </div>
                                    </div>
                                    <div class="justify-content-end d-flex  col-3">
                                        <a href="slCampanhaEncerradaDetalhes.php?id=' . $id2 . '">
                                            <button class="btn align-self-end align-items-center d-flex p-0 justify-content-center" id="bt-circulo-icone">Mais</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }

                ?>

                <!-- /CARD CAMPANHA ENCERRADAS -->

            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <?php require_once('footer.php'); ?>

    <!-- LINKS FIM -->

    <?php require_once('linkFinal.php'); ?>

</body>

</html>