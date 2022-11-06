<?php
if ($_GET) {
    $id = $_GET['id'];
    include_once('conexao/Conexao.php');

    $sql = "SELECT * FROM `tbl_organizacao`,`tbl_responsavel` WHERE `org_Id`=$id AND `fk_Org_Responsavel` =$id ";

    $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

    $dados = mysqli_fetch_array($rs);

    $orgCNPJ = $dados['org_CNPJ'];

    $orgNomeFantasia = $dados['org_NomeFantasia'];
    $orgCep = $dados['org_CEP'];
    $orgEstado = $dados['org_Estado'];
    $orgCidade = $dados['org_Cidade'];
    $orgBairro = $dados['org_Bairro'];
    $orgRua = $dados['org_Rua'];
    $orgNumero = $dados['org_Numero'];
    $orgComplemento = $dados['org_Complemento'];
    $orgSite = $dados['org_Site'];
    $orgTelefone1 = $dados['org_Telefone1'];
    $orgTelefone2 = $dados['org_Telefone2'];
    $orgCelular = $dados['org_Celular'];
    $orgSobre = $dados['org_Sobre'];
    $orgEmail = $dados['login_Organizacao'];
    $orgImagem = $dados['org_ImagemLogo'];
    $ordSobre = $dados['org_Sobre'];

    // responsavel
    $respNome = $dados['resp_Nome'];
} else {
    header('location: slCampanhas.php');
}

?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

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
                    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Entidade /</span> Entidade Perfil</h4>
                    <div class="row m-2 mt-1 mb-3">
                        <!-- imagem perfil  da inst -->
                        <div class="col-12 col-sm-12 m-auto card-org p-0 " id="logado">
                            <!-- imagem de fundo do body -->
                            <div class="header-img-inst ">
                            </div>
                            <div class="col-12 card-org-img d-flex justify-content-center ml-auto ">
                                <img src="img/imagemUsuario/orgPerfil/<?php echo $orgImagem; ?>">
                            </div>
                            <div class="cont-dados-inst">
                                <!-- nome e email -->
                                <div class="nome-inst mb-4">
                                    <h2 class="outline"><?php echo $orgNomeFantasia; ?></h2>
                                    <span><?php echo $orgEmail; ?></span>
                                </div>
                                <!-- colapso -->
                                <div class="inst-dados-body ">
                                    <p class="text-center">
                                        <button type="button" class="btn rounded-pill btn-icon btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="VerMais">
                                            <img src="img/svgicon/mais.png" alt="" id="IconeAtivo">
                                        </button>
                                    </p>
                                    <div class="collapse p-0" id="collapseExample">
                                        <div class="m-auto col-10 p-0 mb-3">
                                            <legend>Dados da Organização</legend>
                                            <div class="bloco-borda col-12 d-flex">
                                                <div class=" col-12 col-md-6">
                                                    <div class="col-12">
                                                        <label for="nome" class="form-label mt-5 d-block">Nome Fantasia</label>
                                                        <p class="  d-inline" id="nome"><?php echo $orgNomeFantasia; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="celular" class="form-label mt-5 d-block">celular</label>
                                                        <p class=" d-inline" id="celular"><?php echo $orgCelular; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label d-block mt-5" for="rua">Rua</label>
                                                        <p id="rua" class=" d-inline"><?php echo  $orgRua . " nº" . $orgNumero; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label d-block mt-5" for="bairro">Bairro</label>
                                                        <p class="  d-inline" id="bairro"><?php echo  $orgBairro; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label d-block mt-5" for="complemento">Complemento</label>
                                                        <p id="complemento" class="  d-inline"><?php echo  $orgComplemento; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="col-12">
                                                        <label for="site" class="form-label mt-5  d-block">Site</label>
                                                        <p class="  d-inline" id="site"><?php echo $orgSite; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="telefone1" class="form-label mt-5  d-block">telefone</label>
                                                        <p class=" d-inline" id="telefone1"><?php echo $orgTelefone1 . ' / ' . $orgTelefone2; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label d-block mt-5" for="cidade">Cidade</label>
                                                        <p id="cidade" class="  d-inline"><?php echo $orgCidade . "-" . $orgEstado; ?></p>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label d-block mt-5" for="cep">Cep</label>
                                                        <p id="cep" class="  d-inline"><?php echo $orgCep; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="descricao col-10 m-auto">
                                        <div class="row">
                                            <legend>Descrição</legend>
                                            <div class="bloco-borda  mb-5 d-flex ">
                                                <p><?php echo $orgSobre;
                                                    ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fim do colapso -->
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

    <!-- / Layout wrapper -->

    <?php require_once('linkFinal.php'); ?>

    <script src="assets/js/entBotaoVerMais.js"></script>

</body>

</html>