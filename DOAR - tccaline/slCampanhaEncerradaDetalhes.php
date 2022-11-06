<?php

if ($_GET) {
    $id = $_GET['id'];
    include_once('conexao/Conexao.php');
    $sql = "SELECT * FROM `tbl_campanha` WHERE camp_Id = $id";
    $dados = mysqli_query($con, $sql);
    if ($rs = mysqli_fetch_array($dados)) {
        $nom = $rs['camp_Nome'];
        $des = $rs['camp_Descricao'];
        $dtIni = $rs['camp_DataInicioCampanha'];
        $dtFim = $rs['camp_DataFinalCampanha'];
        $causa = $rs['camp_TipoCausa'];
        $img = $rs['camp_Imagem'];
        $fk = $rs['fk_Org_Campanha'];
        $agra = $rs['camp_Agradecimento'];
    }
    $sql2 = "SELECT `org_Id`,`org_NomeFantasia`,`org_ImagemLogo`,`org_Telefone1`,`org_CEP`,`org_Estado`,`org_Cidade`,`org_Rua`,`org_Numero`,`org_Bairro`,`org_Complemento` FROM `tbl_organizacao` WHERE org_Id = $fk";
    $dados2 = mysqli_query($con, $sql2);
    if ($rs2 = mysqli_fetch_array($dados2)) {
        $nomeFantasia = $rs2['org_NomeFantasia'];
        $orgImagem = $rs2['org_ImagemLogo'];
        $idOrg = $rs2['org_Id'];
        $telefone = $rs2['org_Telefone1'];
        $orgCep = $rs2['org_CEP'];
        $orgEstado = $rs2['org_Estado'];
        $orgCidade = $rs2['org_Cidade'];
        $orgBairro = $rs2['org_Bairro'];
        $orgRua = $rs2['org_Rua'];
        $orgNumero = $rs2['org_Numero'];
        $orgComplemento = $rs2['org_Complemento'];
    }
}
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

    <!-- css adicional -->
    <link rel="stylesheet" href="assets/css/adcional.css">
    <link rel="stylesheet" href="assets/css/add3.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!--  Menu -->
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
            <!-- fim do header -->

            <!-- / Menu -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="ocupa-espaco"></div>
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <!-- CAMPANHA -->
                                <div class="card-body">
                                    <!-- CARD HEADER -->
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <!-- IMAGEM CAMPANHA -->
                                        <img src="img/imagemUsuario/imgCampanha/<?php echo $img; ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                        <!-- /IMAGEM CAMPANHA -->
                                        <div class="secundario col ">
                                            <h4 class="text-uppercase"><?php echo $nom; ?></h4>
                                            <div class="org">
                                                <!-- IMAGEM INSTITUIÇÃO E DADOS -->
                                                <div class=" ">
                                                    <a href='slEntDetalhes.php?id=<?php echo $idOrg; ?>' class="justify-content-between d-flex mt-4 col">
                                                        <img src="img/imagemUsuario/orgPerfil/<?php echo $orgImagem; ?>" alt="user" id="mini-inst" class="align-self-center" />
                                                        <div class="user-info user-info-inst  col pl-4 ">
                                                            <span><?php echo $nomeFantasia; ?></span>
                                                            <small><?php echo $telefone; ?></small>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- /IMAGEM INSTITUIÇÃO E DADOS -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /CARD HEADER -->
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">

                                    <div class="row">
                                        <!-- NOME -->
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="firstName" class="form-label">Nome</label>
                                            <p class="linha" id="nomeCampanha"><?php echo $nom; ?></p>
                                        </div>
                                        <!-- /NOME -->
                                        <!-- DATA INICIO -->
                                        <div class="mb-3 col-6 col-md-3">
                                            <label for="dataInicio" class="form-label">Inicio</label>
                                            <p class="linha" id="dataInicio"><?php echo date('d/m/Y', strtotime($dtIni));  ?></p>
                                        </div>
                                        <!-- /DATA INICIO-->
                                        <!-- DATA FIM -->
                                        <div class="mb-3 col-6 col-md-3">
                                            <label class="form-label" for="dataFim">Fim</label>
                                            <p class="linha" id="dataFim"><?php echo date('d/m/Y', strtotime($dtFim)); ?></p>

                                        </div>
                                        <!-- /DATA FIM -->
                                        <!-- PONTOS DE COLETA -->
                                        <div class="mt-3 mb-5">
                                            <label class="form-label d-block">Ponto de coleta</label>
                                            <p class=" linha d-inline"><?php echo "<strong>Rua: </strong>" . $orgRua . " nº" . $orgNumero; ?></p>
                                            <p class="ms-4 linha d-inline"><?php echo "<strong>Bairro: </strong> " . $orgBairro; ?></p>
                                            <p class="ms-4 linha d-inline"><?php echo "<strong>Complemento: </strong>" . $orgComplemento; ?></p>
                                            <p class="ms-4 linha d-inline"><?php echo "<strong>Cidade: </strong> " . $orgCidade . "-" . $orgEstado; ?></p>
                                            <p class="ms-4 linha d-inline"><?php echo "<strong>Cep: </strong> " . $orgCep; ?></p>
                                        </div>
                                        <!-- /PONTOS DE COLETA -->
                                        <!-- DESCRICAO -->
                                        <div class="col-12">
                                            <label for="descricao" class="form-label">Descrição:</label>
                                            <div class="form-control p-5">
                                                <span><?php echo $des; ?></span>
                                            </div>
                                        </div>
                                        <!-- /DESCRICAO -->
                                        <!-- agradecimentos -->
                                        <div class="mb-3 col mt-5 ">
                                            <label for="Agradecimentos" class="form-label">Agradecimentos</label>
                                            <textarea class="form-control" id="Agradecimentos" name="Agradecimentos" cols="30" rows="10"><?php echo $agra; ?></textarea>
                                        </div>
                                        <!-- agradecimentos -->
                                        <!-- imagem card -->
                                        <div class="col-12 justify-content-between d-flex flex-wrap mt-5 mb-3" id="mostrarImagem">

                                            <?php
                                            $sql3 = "SELECT `img_Id`, `img_Imagem`, `fk_Camp_Imagem` FROM `tbl_imagem` WHERE `fk_Camp_Imagem` = $id  limit 3";

                                            $res = mysqli_query($con, $sql3);

                                            while ($rep = mysqli_fetch_array($res)) {
                                                echo '
                                                            <div class="imagem-final m-auto mb-4 bg-tranparent">
                                                                <img src="img/imagemUsuario/imgCampanha/' . $rep['img_Imagem'] . '" class="img-fluid " alt="">
                                                            </div>';
                                            }
                                            ?>

                                        </div>
                                        <!-- /imagem card -->

                                        <!-- TABELA DE ITENS -->
                                        <div class="mb-4 mt-3">
                                            <div class="row table-responsive text-nowrap p-0 m-0">
                                                <table class="table table-striped table-hover  col-10" id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>Itens</th>
                                                            <th>Quantidade Arrecadada</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        <?php
                                                        $sql3 = "SELECT * FROM `tbl_itens` WHERE fk_Camp_Item=$id";
                                                        $rs3 = mysqli_query($con, $sql3) or die("Erro ao selecionar a campanha");

                                                        while ($dados3 = mysqli_fetch_array($rs3)) {
                                                            echo '
                                                                    <tr>
                                                                        <td>' . $dados3['iten_Nome'] . '</td>
                                                                        <td></td>
                                                                     </tr>
                                                                ';
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /TABELA DE ITENS -->


                                    </div>

                                </div>
                                <!-- /CAMPANHA -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- FOOTER -->
                <?php require_once('footer.php'); ?>
                <!-- /FOOTER -->

            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>


    <!-- / Layout wrapper -->



    <?php require_once('linkFinal.php'); ?>
    <!-- script do data table -->
    <script src="assets/js/tabela.js"></script>
    <script src="assets/js/tabela2.js"></script>
    <script src="assets/js/traduzirTabela.js"></script>
</body>

</html>