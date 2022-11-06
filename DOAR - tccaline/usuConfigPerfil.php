<?php
session_start();

$id = $_SESSION['id'];

include_once('conexao/Conexao.php');
$sql = "SELECT * FROM `tbl_doador` WHERE doador_Id = $id";
$dados = mysqli_query($con, $sql);
$dado = mysqli_fetch_array($dados);

$doadorNome = $dado['doador_Nome'];
$doadorEmail = $dado['doador_Email'];
$doadorCelular = $dado['doador_Celular'];
$doadorSenha = $dado['doador_Senha'];

if ($doadorCelular == 0 || $doadorCelular == '') {
    $doadorCelular = "";
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

            <!-- importando Menu -->

            <?php
            require_once('usuMenu.php');
            ?>
            <!-- /importando Menu -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuração de Conta /</span> Conta</h4>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card mb-4">
                                <h5 class="card-header">Perfil</h5>
                                <!-- conta -->
                                <div class="card-body">
                                    <!-- imagem -->
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="img/svgIcon/usuarioGrande.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                    </div>
                                    <!-- /imagem -->
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <form id="updateUsuarioDados" method="POST" action="php/doadorUpdate.php">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <div class="row">
                                            <!-- nome -->
                                            <div class="mb-3 col-md-8">
                                                <label for="firstName" class="form-label">Nome</label>
                                                <input class="form-control" type="text" id="firstName" name="nome" value="<?php echo $doadorNome; ?>" />
                                            </div>
                                            <!-- celular -->
                                            <div class="mb-3  col-md-4 ">
                                                <label class="form-label" for="celular">Celular</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="celular" name="celular" class="celular form-control " value="<?php echo $doadorCelular; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- botoes -->
                                        <div class="mt-2" id="usuUpdate">
                                            <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                            <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                                        </div>
                                        <button type="button" id="Desblock" class="btn btn-primary">Editar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form id="dadosLogin" method="POST" onsubmit="return false">
                                        <!-- email -->
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-4">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input class="form-control" type="text" id="email" name="email" value="<?php echo $doadorEmail; ?>" />
                                            </div>
                                            <!-- senha -->
                                            <div class="mb-3 form-password-toggle col-md-4">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label" for="password">Senha</label>
                                                </div>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                </div>
                                            </div>
                                            <!-- Confirmar senha -->
                                            <div class="mb-3 form-password-toggle col-md-4">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label" for="confirmarSenha">Confirmar Senha</label>
                                                </div>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="confirmarSenha" class="form-control" name="confirmarSenha" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                </div>
                                            </div>
                                            <!-- botoes -->
                                            <div class="mt-2" id="botoesLogin">
                                                <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                                            </div>
                                        </div>
                                        <button type="button" id="DesblockLogin" class="btn btn-primary">Editar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Account -->
                        <!-- desativar conta -->
                        <div class="card">
                            <h5 class="card-header">Desativar Conta</h5>
                            <div class="card-body">
                                <div class="mb-3 col-12 mb-0">
                                    <div class="alert alert-warning">
                                        <h6 class="alert-heading fw-bold mb-1">Tem certeza que deseja desativar sua conta?</h6>
                                        <p class="mb-0">Após desativá-la, ela não poderá ser recuperada.</p>
                                    </div>
                                </div>
                                <form id="formAccountDeactivation" method="POST" action="php/DesativarContaUsu.php">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="accountActivation" id="desativarConta" />
                                        <label class="form-check-label" for="accountActivation" required>Confirmar
                                            Desativação</label>
                                    </div>
                                    <button class="btn btn-danger deactivate-account" id="submitDesativa">Desativar
                                        Conta</button>
                                </form>
                            </div>
                        </div>
                        <!-- /dasativar conta -->
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

    <?php require_once('linkFinal.php'); ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

    <!-- cdn jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- minhas mascaras -->
    <script src="assets/js/mascara.js "></script>
    <!-- bloqueia botoes -->
    <script src="assets/js/updateUsuarioCad.js"></script>
    <!-- desativa conta -->
    <script src="assets/js/desativaConta.js"></script>
</body>

</html>