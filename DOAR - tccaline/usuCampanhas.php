<?php session_start(); ?>
<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>
    <!-- CSS ADCIONAL -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- importando Menu -->

            <?php require_once('usuMenu.php'); ?>
            <!-- /importando Menu -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y mb-4">

                    <!-- CARD -->
                    <div class="card p-4 ">
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
                    </div>
                    <!-- /CARD -->
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
                                                            <small>email@gmail.com</small>
                                                        </div>
                                                    </div>
                                                    <div class="justify-content-end d-flex  col-3">
                                                        <a href="usuExibirCampanha.php?id=' . $id . '">
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
                        <!-- card  teste -->
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
                                                        <a href="usuExibirCampanhaFinalizada.php?id=' . $id2 . '">
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
                        <!-- / Content -->
                    </div>


                </div>

                <!-- footer -->
                <?php require_once('footer.php'); ?>
                <!-- /footer -->
                <!-- / Layout page -->
            </div>
            <!-- Overlay -->

        </div>
        <!-- / Layout wrapper -->

    </div>

    <?php require_once('linkFinal.php'); ?>


</body>

</html>