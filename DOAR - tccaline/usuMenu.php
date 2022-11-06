<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- logotipo -->
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">DOar</span>
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
            <a href="#" class="menu-link">
                <div data-i18n="Analytics">Home</div>
            </a>
        </li>
        <!--/ Home -->
        <!-- Campanhas -->
        <li class="menu-item">
            <a href="#" class="menu-link ">
                <div data-i18n="Analytics">Campanhas</div>
            </a>
        </li>
        <!-- / Campanhas -->
        <!-- instituicoes -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <div data-i18n="Analytics">Organizações</div>
            </a>
        </li>
        <!-- /instituicoes -->
        <!-- contribuições -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <div data-i18n="Analytics">Minhas Contribuições</div>
            </a>
        </li>
        <!-- sair -->
        <li class="menu-item  ">
            <a href="login.php" class="menu-link">
                <div data-i18n="Analytics">Sair</div>
            </a>
        </li>
        <!--/ sair -->
        <!-- /botao ajude a plataforma -->
    </ul>
    <ul class="p-0 m-2">
        <hr>
        <li class="d-flex ms-2 align-items-center d-flex ">
            <!-- botao porquinho -->
            <div>
                <button type="button" class="btn btn-primary rounded-pill btn-icon p-2" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    <img src="img/svgIcon/piggy-bank.svg" class="filtro-branco " width="24px">
                </button>
                <span class="me-3">Ajude a manter o site</span>
            </div>
            <!-- /botao porquinho -->
        </li>
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


                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="img/svgIcon/usuario.png" class="w-px-40 h-px-40 rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="img/svgIcon/usuario.png" class="w-px-40 h-px-40 rounded-circle" />
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
                            <a class="dropdown-item" href="usuConfigPerfil.php">

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

        </div>
    </nav>
    <!-- / Navbar -->
    <!-- modal -->
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Ajude a manter o site!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Valor</label>
                            <input type="text" id="nameWithTitle" class="form-control" placeholder="digite o valor.." />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button type="button" class="btn btn-primary">Ajudar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / modal -->