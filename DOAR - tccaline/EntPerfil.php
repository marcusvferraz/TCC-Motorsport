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
                            </div>
                            <div class="cont-dados-inst">
                                <!-- nome e email -->
                                <div class="nome-inst mb-4">
                                    <h2 class="outline">Nome da Instituição</h2>
                                    <span>Email@gamail.com</span>
                                </div>
                                <!-- colapso -->
                                <din class="inst-dados-body ">
                                    <p class="text-center">
                                        <button type="button" class="btn rounded-pill btn-icon btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="VerMais">
                                            <img src="img/svgicon/mais.png" alt="" id="IconeAtivo">
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="div-colapso col-10 m-auto mb-3">
                                            <h4>Dados da Organização</h4>
                                            Some placeholder content for the collapse component. This panel is hidden by default but
                                            revealed when the user activates the relevant trigger.
                                        </div>
                                    </div>
                                    <div class="descricao col-10 m-auto mb-4 pb-2">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maxime velit molestiae
                                            eos id, nemo porro repellendus provident, possimus ipsam voluptas. Soluta fugiat porro
                                            ad fugit omnis modi, velit quae!</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maxime velit molestiae
                                            eos id, nemo porro repellendus provident, possimus ipsam voluptas. Soluta fugiat porro
                                            ad fugit omnis modi, velit quae!</p>
                                    </div>
                                </din>
                                <!-- fim do colapso -->
                            </div>
                        </div>


                    </div>



                </div>
                <!-- / Content -->

                <!-- footer -->
                <?php require_once('footer.php'); ?>
                <!-- /footer -->

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



    <?php require_once('linkFinal.php'); ?>

    <script>
        // mudar o icone 
        $(document).ready(function() {

            $('button#VerMais').click(function() {

                var idcheck = $("button#VerMais img").attr('id');

                if (idcheck == "IconeAtivo") {
                    $('button#VerMais img').attr('id', 'IconeDesativado');
                    $('button#VerMais img').attr('src', 'img/svgIcon/menos.png')
                } else if (idcheck == "IconeDesativado") {
                    $('button#VerMais img').attr('id', 'IconeAtivo');
                    $('button#VerMais img').attr('src', 'img/svgIcon/mais.png')
                }

            })
        });
    </script>
</body>

</html>