<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Do Ar</title>

    <meta name="description" content="" />

    <!-- link de inicio -->
    <?php require_once('linkInicio.php'); ?>

</head>

<body class="vh-100 align-items-center d-flex">
    <!-- Content -->

    <div class="container-xxl container">
        <div class="row justify-content-center  ">
            <div class="authentication-wrapper authentication-basic  col-11 col-md-6 col-lg-5 ">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-2">Cadastro Usuario</h4>

                            <form id="cadUsuario" class="mb-3" method="POST" action="php/cadUsu.php">
                                <div class="mb-3">
                                    <label for="anoNascimento" class="form-label">ano de Nascimento</label>
                                    <input type="number" class="form-control" id="anoNascimento" name="anoNascimento" placeholder="digite o seu ano de nascimento" minlength="4" maxlength="4" required />
                                    <span id="mensagemUsuario"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="digite o email" />
                                </div>
                                <div class="mb-4 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Senha</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required minlength="8" maxlength="16" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                    </div>
                                    <span id="mensagem"></span>
                                </div>
                                <div class="mb-4 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password2">repita a Senha</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password2" class="form-control" name="password2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required minlength="8" maxlength="16" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" id="cadastrarUsuario" type="submit" disabled>Cadastrar</button>
                                </div>
                            </form>

                            <p class="text-center">
                                <span>Já possui cadastro? </span>
                                <a href="login.php">
                                    <span>voltar ao login</span>
                                </a>
                            </p>
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

    <!-- jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/mascara.js"></script>

    <!-- jquery validate -->
    <script src="assets/js/jqueryValidate/jquery.validate.min.js"></script>
    <script src="assets/js/jqueryValidate/localization/messages_pt_BR.js"></script>

    <!-- script calculo de data e meu validate -->
    <script src="assets/js/cadUsu.js"></script>

    <script>
        $('form#cadUsuario #password').focus(function() {
            $('form#cadUsuario span#mensagem').html('A senha deve ter entre 8 e 16 caracteres');
        });
        $('form#cadUsuario #password').blur(function() {
            $('form#cadUsuario span#mensagem').html('');
        });
        $('form#cadUsuario #password2').blur(function() {
            let senha1 = $('form#cadUsuario #password').val();
            let senha2 = $('form#cadUsuario #password2').val();
            if (senha1 !== senha2) {
                $('form#cadUsuario span#mensagem').html('Senhas diferentes');
                $('form#cadUsuario span#mensagem').css('color', 'red');
            }

        });
        $('form#cadUsuario #cadastrarUsuario').submit(function(event) {
            let senha1 = $('form#cadUsuario input#password').val();
            let senha2 = $('form#cadUsuario input#password2').val();
            if (senha1 !== senha2) {
                $('form#cadUsuario span#mensagem').html('Senhas diferentes');
                $('form#cadUsuario span#mensagem').css('color', 'red');
                event.preventDefault()
            }

        });
    </script>

</body>

</html>