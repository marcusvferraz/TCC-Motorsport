<?php session_start();

if ($_GET) {
    $id = $_GET['id'];
} else {
    header('location: entCampanhas.php');
}
?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

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
                        <a href="loginEnt.php" class="menu-link">
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
                                <a class="dropdown-item" href="loginEnt.php">
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

                <!-- / Navbar -->
                <!-- /menu -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campanha /</span> Encerrando Campanha
                        </h4>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="card mb-4">
                                    <h5 class="card-header">Finalizar Campanha</h5>

                                    <!-- conta -->

                                    <hr class="my-0" />

                                    <div class="card-body">
                                        <p class="text-muted mb-3"> É necessário carregar ao menos uma imagem</p>

                                        <div class="row">

                                            <!-- imagens -->
                                            <div class=" row align-items-start align-items-sm-center ">
                                                <div class="d-flex justify-content-between d-flex gap-4">
                                                    <form id="formAccountSettings" method="POST" action="php/finalizarCampanha.php" enctype="multipart/form-data">
                                                        <!-- id -->
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                        <div class="button-wrapper">
                                                            <label for="upload" tabindex="0">
                                                                <span class="d-none d-sm-block">Carregar Imagem</span>
                                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                                <input type="file" id="upload" name="arquivo" class="form-control" accept="image/png, image/jpeg" required />
                                                            </label>
                                                            <p class="text-muted mb-0"> </p>
                                                            <div class="justify-content-end d-flex">
                                                                <button class="btn btn-primary mt-3" id="enviaFoto" type="submit">Salvar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form id="formAccountSettings" method="POST" action="php/finalizarCampanha.php" enctype="multipart/form-data">
                                                        <!-- id -->
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                                                        <div class="button-wrapper">
                                                            <label for="upload" tabindex="0">
                                                                <span class="d-none d-sm-block">Carregar Imagem</span>
                                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                                <input type="file" id="upload" name="arquivo2" class="form-control" accept="image/png, image/jpeg" required />
                                                            </label>
                                                            <p class="text-muted mb-0"> </p>
                                                            <div class="justify-content-end d-flex">
                                                                <button class="btn btn-primary mt-3" id="enviaFoto" type="submit">Salvar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form id="formAccountSettings" method="POST" action="php/finalizarCampanha.php" enctype="multipart/form-data">
                                                        <!-- id -->
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                                                        <div class="button-wrapper">
                                                            <label for="upload" tabindex="0">
                                                                <span class="d-none d-sm-block">Carregar Imagem</span>
                                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                                <input type="file" id="upload" name="arquivo3" class="form-control" accept="image/png, image/jpeg" required />
                                                            </label>
                                                            <p class="text-muted mb-0"> </p>
                                                            <div class="justify-content-end d-flex">
                                                                <button class="btn btn-primary mt-3" id="enviaFoto" type="submit">Salvar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- /imagem -->

                                        <!-- descricao -->
                                        <form id="agradecimentos" method="POST" action="php/agradecimento.php">
                                            <!-- id -->
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <div class="mb-3 col-12 mt-4">
                                                <label for="Agradecimentos" class="form-label">Agradecimentos</label>
                                                <textarea class="form-control" id="Agradecimentos" name="agradecimentos" cols="30" rows="10" required></textarea>
                                            </div>

                                            <!-- botoes -->
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                                <button type="reset" class="btn btn-outline-secondary">limpar</button>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- /Account -->

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- footer -->
                    <?php require_once('footer.php'); ?>
                    <!-- /footer -->


                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->

    </div>
    <!-- / Layout wrapper -->



    <?php require_once('linkFinal.php'); ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

    <!-- quando seleciona a imagem ela é mostrada na div -->
    <script src="assets/js/imagemPreview.js"></script>


</body>

</html>