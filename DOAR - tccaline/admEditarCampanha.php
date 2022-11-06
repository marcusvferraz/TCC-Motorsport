<?php session_start();

if ($_GET) {
    $id = $_GET['id'];
    include_once('conexao/Conexao.php');
    $sql = "SELECT * FROM `tbl_campanha` WHERE camp_Id = $id ";
    $dados = mysqli_query($con, $sql);
    if ($dado = mysqli_fetch_array($dados)) {
        $campId = $dado['camp_Id'];
        $nom = $dado['camp_Nome'];
        $des = $dado['camp_Descricao'];
        $dtIni = $dado['camp_DataInicioCampanha'];
        $dtFim = $dado['camp_DataFinalCampanha'];
        $agra = $dado['camp_Agradecimento'];
        $fk = $dado['fk_Org_Campanha'];
        $causa = $dado['camp_TipoCausa'];
        $imagem = $dado['camp_Imagem'];
        $_SESSION['idCampMomento'] = $id;
        $_SESSION['imagemCampanha'] = $dado['camp_Imagem'];
    }
}

?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

    <!-- css adicional -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- importando Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <!-- logotipo -->
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Logo</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <!--/ logotipo -->
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <!-- menu escrita -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Menu</span>
                    </li>
                    <!--/ menu escrita -->
                    <!-- Home -->
                    <li class="menu-item active">
                        <a href="admVisualizarDoadores.php" class="menu-link">
                            <div data-i18n="Analytics">Visualizar Usuarios</div>
                        </a>
                    </li>
                    <!--/ Home -->
                    <!-- Campanhas -->
                    <li class="menu-item">
                        <a href="admVisualizarEntidades.php" class="menu-link ">
                            <div data-i18n="Analytics">Visualizar Organizações</div>
                        </a>
                    </li>
                    <!-- / Campanhas -->
                    <!-- instituicoes -->
                    <li class="menu-item">
                        <a href="admVisualizarCampanhas.php" class="menu-link">
                            <div data-i18n="Analytics">Visualizar Campanhas</div>
                        </a>
                    </li>
                    <!-- /instituicoes -->

                    <!-- sair -->
                    <li class="menu-item">
                        <a href="login.php" class="menu-link">
                            <div data-i18n="Analytics">Sair</div>
                        </a>
                    </li>
                    <!--/ sair -->
                    <!-- /botao ajude a plataforma -->
                </ul>

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                </nav>
                <!-- / Navbar -->
                <!-- /importando Menu -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Adm /</span> Editar Campanha</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <!-- CAMPANHA -->
                                    <div class="card-body">
                                        <!-- CARD HEADER -->
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <!-- IMAGEM CAMPANHA -->

                                            <form id="form-Imagem" method="POST" enctype="multipart/form-data" action="php/admImagemCampanha.php">
                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <img src="img/imagemUsuario/imgCampanha/<?php echo $imagem; ?> " alt="user-avatar" class="d-block rounded" height="100" width="100" id="file-ip-1-preview" />
                                                    <div class="button-wrapper">
                                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                            <span class="d-none d-sm-block">Carregar foto</span>
                                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                                            <input type="file" id="upload" name="arquivo" class="account-file-input" hidden accept="image/png, image/jpeg" onchange="showPreview(event);" required />
                                                        </label>
                                                        <p class="text-muted mb-0"> </p>

                                                        <button class="btn btn-primary" id="enviaFoto" type="submit">Salvar</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <!-- /IMAGEM CAMPANHA -->
                                            <div class="secundario col ">
                                                <h3><?php echo $nom; ?></h3>
                                            </div>
                                        </div>
                                        <!-- /CARD HEADER -->
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="updateCampanha" method="POST" action="php/admUpdateCampanha.php">
                                            <div class="row">
                                                <!-- ID -->
                                                <div class="mb-3 col-md-1">
                                                    <label for="id" class="form-label">id</label>
                                                    <input type="text" name="id" value="<?php echo $id; ?>" readonly class="form-control">
                                                </div>
                                                <!-- /ID -->
                                                <!-- NOME -->
                                                <div class="mb-3 col-md-4">
                                                    <label for="firstName" class="form-label">Nome</label>
                                                    <input type="text" name="nomeCamp" value="<?php echo $nom; ?>" class="form-control">
                                                </div>
                                                <!-- /NOME -->
                                                <!-- CAUSA -->
                                                <div class="mb-3 col-md-3">
                                                    <label for="causa" class="form-label">Causa Social</label>
                                                    <input type="text" name="causa" value="<?php echo $causa; ?>" class="form-control" id="causa">
                                                </div>
                                                <!-- /CAUSA -->

                                                <!-- DATA INICIO -->
                                                <div class="mb-3 col-6 col-sm-2">
                                                    <label for="dataInicio" class="form-label">Inicio</label>
                                                    <input type="date" class="form-control" value="<?php echo date('d/m/Y', strtotime($dtIni)); ?>" readonly id="dataInicio">

                                                </div>
                                                <!-- /DATA INICIO-->
                                                <!-- DATA FIM -->
                                                <div class="mb-3 col-6 col-sm-2">
                                                    <label class="form-label" for="dataFim">Fim</label>
                                                    <input type="date" class="form-control" value="<?php echo date('d/m/Y', strtotime($dtFim)); ?>" readonly id="dataFim">

                                                </div>
                                                <!-- /DATA FIM -->
                                                <!-- DESCRICAO -->
                                                <div class="col-12">
                                                    <label for="descricao" class="form-label">Descrição:</label>
                                                    <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control">
                                                <?php echo $des; ?>
                                                </textarea>
                                                </div>
                                                <!-- /DESCRICAO -->
                                                <!-- agradecimentos -->

                                                <div class="mb-3 col mt-3 ">
                                                    <label for="Agradecimentos" class="form-label">Agradecimentos</label>
                                                    <textarea class="form-control" id="Agradecimentos" name="agradecimentos" cols="30" rows="10"><?php echo $agra; ?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2" id="salvar">Salvar</button>
                                        </form>

                                        <!-- agradecimentos -->
                                        <!-- imagem card -->
                                        <div class="col-12 justify-content-between d-flex flex-wrap mt-5 mb-3" id="mostrarImagem">

                                            <?php

                                            $sql2 = "SELECT `img_Id`, `img_Imagem`, `fk_Camp_Imagem` FROM `tbl_imagem` WHERE `fk_Camp_Imagem` = $campId  limit 3";

                                            $res = mysqli_query($con, $sql2);

                                            while ($rep = mysqli_fetch_array($res)) {
                                                echo '
                                                            <div class="imagem-final m-auto mb-4 bg-tranparent">
                                                                 <img src="img/imagemUsuario/imgCampanha/' . $rep['img_Imagem'] . '" class="img-fluid " alt="">
                                                            </div>';
                                            }

                                            ?>

                                        </div>
                                        <!-- /imagem card -->
                                        <!-- imagens -->
                                        <form action="">
                                            <div class=" row align-items-start align-items-sm-center " id="editarImagem">

                                                <div class="mb-3 col-12 col-md-4">
                                                    <label for="formFile" class="form-label">Carregar Imagem </label>
                                                    <input class="form-control" type="file" id="formFile" />
                                                </div>
                                                <div class="mb-3 col-12 col-md-4">
                                                    <label for="formFile" class="form-label">Carregar Imagem </label>
                                                    <input class="form-control" type="file" id="formFile" />
                                                </div>
                                                <div class="mb-3 col-12 col-md-4">
                                                    <label for="formFile" class="form-label">Carregar Imagem </label>
                                                    <input class="form-control" type="file" id="formFile" />
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary me-2" id="salvar">Salvar</button>
                                        </form>

                                        <!-- BOTOES -->
                                        <div class="mt-2 mb-3">
                                            <button type="button" class="btn btn-primary me-2" id="editar">Editar</button>
                                            <button type="button" class="btn btn-secondary me-2" id="cancelar">Cancelar</button>

                                        </div>
                                        <!-- BOTOES -->
                                    </div>
                                    </form>
                                </div>
                                <!-- /CAMPANHA -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- FOOTER -->
                <?php require_once('footer.php'); ?>
                <?php include_once('php/mensagemErro.php'); ?>
                <?php include_once('php/mensagemSucesso.php'); ?>
                <!-- /FOOTER -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- link final -->
    <?php require_once('linkFinal.php'); ?>
    <script>
        // $(document).ready(function() {
        //     $('button#cancelar').hide();
        //     $('button#salvar').hide();
        //     $('#editarImagem').hide();
        //     $(" button#editar").click(function() {
        //         $('#updateCampanha input').removeAttr('disabled');
        //         $('#updateCampanha textarea').removeAttr('disabled');
        //         $(" button#editar").hide();
        //         $('button#cancelar').show();
        //         $('button#salvar').show();
        //         $('#editarImagem').show();
        //         $("div#mostrarImagem div").hide();
        //     });
        //     $(" button#cancelar").click(function() {
        //         $('#updateCampanha input').attr('disabled', 'disabled');
        //         $('#updateCampanha textarea').attr('disabled', 'disabled');
        //         $(" button#editar").show();
        //         $('button#cancelar').hide();
        //         $('button#salvar').hide();
        //         $('#editarImagem').hide();
        //         $("div#mostrarImagem div").show();
        //     });
        // });
    </script>


</body>

</html>