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
                            <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?>" alt class="w-px-40 h-auto rounded-circle" />
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