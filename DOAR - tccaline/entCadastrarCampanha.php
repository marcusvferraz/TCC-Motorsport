<?php session_start(); ?>

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


                <!-- /MENU ENTIDADE -->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campanha /</span> Nova
                        </h4>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card mb-4">
                                    <h5 class="card-header">Cadastrar Campanha</h5>
                                    <!-- conta -->
                                    <div class="card-body">
                                        <!-- imagem -->
                                        <form id="cadCampanha" enctype="multipart/form-data" method="POST">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">

                                                <div class="button-wrapper">
                                                    <label for="arquivo" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                        <span class="d-none d-sm-block">Carregar foto</span>
                                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                                                        <input type="file" id="arquivo" name="arquivo" required class="account-file-input" hidden accept="image/png, image/jpeg, image/jpg" required />
                                                    </label>
                                                    <p id="aviso" class="text-muted mb-0">Somente imagens: .jpg .jpeg .png</p>
                                                    <p id="aviso1"></p>
                                                    <p id="aviso2"></p>
                                                    <p id="aviso3"></p>
                                                </div>
                                            </div>
                                            <!-- /imagem -->
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">

                                        <div class="row">

                                            <!-- nome -->
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">Nome da campanha</label>
                                                <input class="form-control" type="text" id="firstName" name="nomeCamp" autofocus required autocomplete="off" minlength="5" maxlength="45" />
                                            </div>
                                            <!-- tipo de campanha -->
                                            <div class="mb-3 col-md-6">
                                                <label for="radio" class="form-label mb-1">Tipo de campanhas</label>
                                                <div id="radio" class="mt-1 d-flex justify-content-evenly p-1">
                                                    <input class="form-check-input mt-0" type="radio" id="somenteDivulgar" name="tipoCampanha" value="0" checked /><span>Somente divulgar</span>
                                                    <br>
                                                    <input class="form-check-input mt-0" type="radio" id="doarNaPlataforma" name="tipoCampanha" value="1" /><span>Arrecadar pela plataforma</span>
                                                </div>
                                            </div>
                                            <!-- causa -->
                                            <div class="mb-3 col-md-6">
                                                <label for="causa" class="form-label">causa social</label>
                                                <input class="form-control" type="text" id="causa" name="causa" required autocomplete="off" minlength="3" maxlength="20" />
                                            </div>

                                            <!-- dataFim -->
                                            <div class="mb-3 col-md-6">
                                                <label for="dataFim" class="form-label">data prevista para o termino</label>
                                                <input class="form-control" type="date" id="dataFim" name="dataFim" required autocomplete="off" />
                                            </div>
                                            <!-- descricao -->

                                            <div class="mb-3 col">
                                                <label for="descricao" class="form-label">descricao</label>
                                                <textarea class="form-control" id="descricao" name="descricao" cols="30" rows="10" required autocomplete="off" maxlength="245" minlength="30"></textarea>
                                            </div>


                                            <!-- botoes -->
                                            <div class="mt-2" id="botoesCadastrarCampanha">
                                                <button class="btn btn-primary me-2" id="salvar" type="submit">Salvar</button>
                                                <button type="reset" class="btn btn-outline-secondary" id="limpar">Limpar tudo</button>
                                            </div>
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
</body>

</html>

<?php

// upload de imagem

// se o arquivo foi recebido
if (isset($_FILES['arquivo'])) {

    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error']) {
        $_SESSION['erro'] = 1;

        die();
    }

    // 2097152 kilobyte são 2 megabytes 
    // 1024 bytes = 1kb
    // 1024 kb = 1M
    if ($arquivo['size'] > 2097152) {
        $_SESSION['erro'] = 2;

        die();
    }

    // pasta onde a imagem será salva
    $pasta = "img/imagemUsuario/imgCampanha/";

    //   guarda o nome antigo da imagem
    $nomeArquivo = $arquivo['name'];

    // cria um novo nome unico para a imagem
    $novoNome = uniqid();

    // pega a extensão do aquivo(jpeg,jpg,png) e guarda na variavel em letras minusculas
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    // verifica se a extensao do arquivo é aceita
    if ($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg") {
        $_SESSION['erro'] = 3;
        header('location: ../cadEntidade.php');
        die();
    }

    // move o arquivo para a pasta, dá a ele o novo nome concatenando-o a extensão
    $deuCerto = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNome . "." . $extensao);

    if ($deuCerto) {
        $image = $novoNome . "." . $extensao;


        $dataInicioCamp = date('Y-m-d');
        $statusCamp = 'ativa';

        if ($_POST) {
            include_once('conexao/Conexao.php');
            $condicao = false;
            $nomeCamp = $_POST['nomeCamp'];
            $tipoCamp = $_POST['tipoCampanha'];
            $causaCamp = $_POST['causa'];
            $dataFimCamp = $_POST['dataFim'];
            $descricaoCamp = $_POST['descricao'];
            $agradecimento = '';
            $fkOrg = $_SESSION['id'];

            //     // falta a fk, agradecimento depois , `fk_Org_Campanha`)

            $sql = "INSERT INTO `tbl_campanha`(`camp_Nome`, `camp_Descricao`, `camp_DataFinalCampanha`, `camp_TipoCausa`, `camp_DataInicioCampanha`, `camp_Exib`,
                                               `camp_Status`,`camp_Imagem`,`camp_Agradecimento`, `fk_Org_Campanha`) VALUES ('$nomeCamp','$descricaoCamp','$dataFimCamp','$causaCamp', '$dataInicioCamp','$tipoCamp','$statusCamp','$image','$agradecimento','$fkOrg')";



            $res = mysqli_query($con, $sql) or die("Erro");


            if ($res) {

                $fk = mysqli_insert_id($con);
                echo "<script>
                    Swal.fire({
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        title: 'Campanha cadastrada com sucesso!',
                        icon: 'success',
                        text: 'Desaja cadastrar os itens que serão arrecadados na campanha? eles poderão ser cadastrados mais tarde.',
                        showDenyButton: true,
                        confirmButtonText: 'Cadastrar Item',
                        denyButtonText: `Cadastrar mais tarde`,
                        }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                        Swal.fire('Saved!', '')

                        window.location.assign('itemTeste.php?fk=$fk')

                        } else if (result.isDenied) {
                        Swal.fire('', '')
                        window.location.assign('entCampanhas.php?')
                    }
                })</script>";
            } else {

                echo    "<script>
                    Swal.fire(
                        'Ops...',
                        'Houve um erro ao cadastrar a campanha! verifique se os dados foram inseridos corretamente.',
                        'error'
                    )
                </script>";
            }
            mysqli_close($con);
        }
    }
}
?>