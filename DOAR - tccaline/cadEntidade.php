<?php session_start();

?>
<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Do Ar</title>

    <meta name="description" content="" />

    <!-- link de inicio -->
    <?php require_once('linkInicio.php'); ?>


</head>

<body>
    <!-- Content -->
    <div class="container-xxl container mt-5 mb-5">
        <div class="row justify-content-center d-flex">
            <div class="authentication-wrapper authentication-basic  col-11 col-lg-10  ">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">Cadastro da Organização</h4>
                            <form id="cadEnt" class="mb-4" action="php/cadOrg.php" method="POST" enctype="multipart/form-data">
                                <fieldset class="mb-3 mt-4">

                                    <legend class="mb-3">Organização</legend>

                                    <div class="button-wrapper mt-5">
                                        <label for="arquivo" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Carregar foto (Obrigatório)</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="arquivo" name="arquivo" class="account-file-input" hidden accept="image/png, image/jpeg, image/jpg" required>
                                        </label>
                                        <p id="aviso" class="text-muted mb-0">Somente imagens: .jpg .jpeg .png</p>
                                        <p id="aviso1" class="text-muted mb-0">Tamanho máximo permitido: 2Mb</p>
                                        <p id="aviso2"></p>
                                        <p id="aviso3"></p>
                                    </div>

                                    <div class="row">
                                        <!-- razao socail -->
                                        <div class="col-12 col-sm-6 mb-3">
                                            <label for="RazaoSocial" class="form-label"> Razão Social <span class="text-lowercase fw-light ">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="Razão Social" required name="razaoSocial" id="RazaoSocial">
                                        </div>
                                        <!-- nome fantasia -->
                                        <div class="col-12 col-sm-6 mb-3">
                                            <label for="nomeFantasia" class="form-label"> Nome fantasia <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="Nome Fantasia" required name="nomeFantasia" id="nomeFantasia">
                                        </div>
                                        <!-- cnpj -->
                                        <div class="col-6 col-sm-6 col-md-4 mb-3">
                                            <label for="cnpj" class="form-label">cnpj <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="CNPJ" required id="cnpj" name="cnpj">
                                        </div>
                                        <!-- telefone -->
                                        <div class="col-6 col-md-4 mb-3">
                                            <label for="telefone" class="form-label"> telefone <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control telefone" placeholder="Telefone" id="telefone" required name="telefone">
                                        </div>
                                        <!-- telefone -->
                                        <div class="col-6 col-md-4 mb-3">
                                            <label for="telefone2" class="form-label"> telefone </label>
                                            <input type="text" class="form-control telefone" placeholder="Telefone2" id="telefone" name="telefone2">
                                        </div>
                                        <!-- celular -->
                                        <div class="col-6 col-md-5 mb-3">
                                            <label for="celuar" class="form-label"> celular </label>
                                            <input type="text" class="form-control celular" placeholder="Celular" id="celular" name="celular">
                                        </div>
                                        <!-- cep -->
                                        <div class="col-8 col-sm-12 col-md-5 mb-3">
                                            <label for="cep" class="form-label"> cep </label>
                                            <input type="text" class="form-control" placeholder="Cep" id="cep" name="cep">
                                        </div>
                                        <!-- estado -->
                                        <div class="col-4 col-sm-3 col-md-2 mb-3">
                                            <label for="uf" class="form-label"> estado <span class="text-lowercase fw-light">obrigatório</span> </label>
                                            <input type="text" class="form-control" placeholder="Estado" required name="estado" id="uf" value="SP">
                                            <span id="avisoUf"></span>
                                        </div>
                                        <!-- cidade -->
                                        <div class="col-6 col-sm-9 col-md-6 mb-3">
                                            <label for="cidade" class="form-label"> cidade <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="Cidade" required name="cidade" id="cidade" value="Guaratinguetá">
                                            <span id="avisoCidade"></span>
                                        </div>

                                        <!-- bairro -->
                                        <div class="col-6 col-md-6 mb-3">
                                            <label for="bairro" class="form-label"> bairro <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="Bairro" required name="bairro" id="bairro">
                                        </div>
                                        <!-- rua -->
                                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                                            <label for="rua" class="form-label"> rua <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="Rua" required name="rua" id="rua">
                                        </div>
                                        <!-- numero -->
                                        <div class="col-4 col-sm-3 col-md-2 mb-3">
                                            <label for="bairro" class="form-label"> numero <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="number" class="form-control" placeholder="Numero" required name="numero">
                                        </div>
                                        <!-- complemento -->
                                        <div class="col mb-3">
                                            <label for="complemento" class="form-label"> complemento </label>
                                            <input type="text" class="form-control" placeholder="Complemento" name="complemento" id="complemento">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mb-3">
                                    <!-- tem que subir a data de cadastro, o id é autoincrmento, e o tipo de usuario -->
                                    <legend class="mb-3">Dados do Responsável</legend>
                                    <div class="row">
                                        <!-- nome responsavel -->
                                        <div class="col-12 col-sm-6 mb-3">
                                            <label for="nomeResp" class="form-label"> Nome do Responsável <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="Nome completo" required name="nomeResponsavel" id="nomeResp">
                                        </div>
                                        <!-- cpf -->
                                        <div class="col-6 col-sm-6 mb-3">
                                            <label for="cpf" class="form-label"> cpf <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control" placeholder="CPF" id="cpf" required name="cpfResp">
                                        </div>
                                        <!-- celular -->
                                        <div class="col-6 mb-3">
                                            <label for="celularresp" class="form-label"> Celular <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="text" class="form-control celular" placeholder="celular" id="celularresp" required name="celularResp">
                                        </div>
                                        <!-- email -->
                                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                                            <label for="emailResp" class="form-label"> Email</label>
                                            <input type="email" class="form-control" placeholder="email" name="emailResp" id="emailResp">
                                        </div>

                                    </div>

                                </fieldset>
                                <fieldset>
                                    <legend class="mb-3">Dados de Login</legend>
                                    <div class="row">
                                        <div class="col-12 col-md-4 mb-3">
                                            <label for="emailLogin" class="form-label"> Email <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <input type="email" class="form-control" placeholder="examplo@gmail.com" id="emailLogin" required name="emailLoginOrg">
                                        </div>
                                        <div class="mb-4 col-12 col-sm-6 col-md-4 form-password-toggle">
                                            <label for="password" class="form-label"> Senha <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" name="password" placeholder="senha" aria-describedby="password" required minlength="8" maxlength="16" required />
                                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                            </div>
                                        </div>
                                        <div class="mb-4 col-12 col-sm-6 col-md-4 form-password-toggle">
                                            <label for="password2" class="form-label"> repita a senha <span class="text-lowercase fw-light">obrigatório</span></label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password2" class="form-control" name="password2" placeholder="Confirme a Senha" aria-describedby="password" minlength="8" maxlength="16" required />
                                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                        <div class="justify-content-center d-flex mb-4">
                                            <span id="mensagem"></span>
                                        </div>

                                    </div>
                                </fieldset>
                                <div class="row form-botao d-flex justify-content-end">
                                    <div class="col-12 col-md-6 mt-3 mb-3 d-flex justify-content-evenly">
                                        <div class="col-6 justify-content-center d-flex">
                                            <input type="reset" class="btn btn-outline-secondary" value="Limpar">
                                        </div>
                                        <div class="col-6 justify-content-center d-flex">
                                            <input type="submit" class="btn btn-primary" value="Cadastrar" id="cadastrarEnt">
                                        </div>
                                    </div>
                                </div>

                            </form>

                            <p>Já possui cadastro? Volta a <a href="loginEnt.php">página de Login</a></p>

                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <!-- links fim -->

    <?php require_once('linkFinal.php'); ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

    <!-- cdn jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery validate plugin -->
    <script src="assets/js/cadastroEntidade.js"></script>
    <script src="assets/js/jqueryValidate/jquery.validate.min.js"></script>
    <script src="assets/js/jqueryValidate/localization/messages_pt_BR.js"></script>

    <!-- minhas mascaras -->
    <script src="assets/js/mascara.js"></script>
    <!-- aplica o jquery validate, meu arquivo -->
    <script src="assets/js/cadEntidade.js"></script>
    <!-- js cep -->
    <script src="assets/js/cep.js"></script>
    <!-- confere se a cidade e eo estado estão ok -->
    <script src="assets/js/cepGuaraVerifica.js"></script>

</body>

</html>