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
            <!-- menu -->
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
                    <!-- Campanhas -->
                    <li class="menu-item  menu-item active">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">Campanhas</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="entCadastrarCampanha.php" class="menu-link">
                                    <div data-i18n="Accordion">Nova</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="entCampanhas.php" class="menu-link">
                                    <div data-i18n="Accordion">Em andamento:</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="entCampanhasFinalizadas.php" class="menu-link">
                                    <div data-i18n="Accordion">Finalizadas</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Campanhas -->
                    <!-- doações -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <div data-i18n="Analytics">Doações</div>
                        </a>
                    </li>
                    <!-- /doações -->

                    <!-- sair -->
                    <li class="menu-item">
                        <a href="login.php" class="menu-link">
                            <div data-i18n="Analytics">Sair</div>
                        </a>
                    </li>
                    <!--/ sair -->
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
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?>" class="w-px-40 h-px-40 rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?>" class="w-px-40 h-px-40 rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $_SESSION['nome']; ?></span>
                                                    <small class="text-muted"><?php echo $_SESSION['email']; ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="entEditarPerfil.php">
                                            <span class="align-middle">Meu Perfil</span>
                                        </a>
                                    </li>
                                    <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.php">
                                    <img src="img/icone/logout2.png" alt="" class="tf-icons bx icone-menu ">
                                    <span class="align-middle">Sair</span>
                                </a>
                            </li>
                        </ul>
                        </li>
                        <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- /menu -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y mb-4">

                        <!-- CARD -->
                        <div class="card p-4 ">
                            <!-- BUSCAR -->

                            <form action="" method="POST">
                                <label for="html5-search-input" class="col-md-2 col-form-label">buscar</label>
                                <div class=" row">
                                    <div class="col-12 justify-content-start d-flex">
                                        <input class="form-control" type="search" placeholder="Digite..." id="html5-search-input" name="pesquisar" />
                                        <button type="submit" class="btn btn-primary"><img src="img/svgIcon/buscar.png" class="icone-filtro"></button>
                                    </div>

                                </div>
                            </form>

                            <!-- /BUSCAR -->
                        </div>
                        <!-- /CARD -->
                        <div class="card bg-transparent mt-5 m-0 p-0" id="invisivel">
                            <h3>Em andamento: </h3>
                            <!-- CARD CAMPANHA ANDAMENTO-->
                            <div class="row">

                                <div class="container-card justify-content-start row g-4 ">
                                    <?php
                                    include_once('conexao/Conexao.php');
                                    $fk = $_SESSION['id'];
                                    if ($_POST) {
                                        $ps = $_POST['pesquisar'];

                                        $sql = "SELECT * FROM `tbl_campanha` where camp_Status = 'finalizada' and fk_Org_Campanha = $fk
                                        and camp_Nome like '%$ps%'";
                                    } else {

                                        $sql = "SELECT * FROM `tbl_campanha` where camp_Status = 'finalizada' and fk_Org_Campanha = $fk  order by camp_Nome";
                                    }
                                    $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

                                    while ($dados = mysqli_fetch_array($rs)) {
                                        $id = $dados['camp_Id'];

                                        echo ' <div class="card-camp encerrado mb-5">
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
                                                        <img src="img/imagemUsuario/orgPerfil/' . $_SESSION['imagem'] . '" />
                                                            <div class="user-info col">
                                                                <span>' . $_SESSION['nome'] . '</span>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="justify-content-end d-flex  col-3">
                                                            <a href="entDetalheCampanhaFinalizada.php?id=' . $id . '">
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
                            <!-- / Content -->
                        </div>
                        <!-- Content wrapper -->

                    </div>
                    <!-- / Layout page -->
                    <!-- footer -->
                    <?php require_once('footer.php'); ?>
                    <!-- /footer -->
                </div>
            </div>
            <!-- / Layout wrapper -->
            <?php require_once('linkFinal.php'); ?>
        </div>
    </div>
</body>

</html>