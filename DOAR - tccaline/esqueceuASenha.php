<?php session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('phpMailer/vendor/autoload.php');

$mail = new PHPMailer(true);

?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style customizer-hide h-100" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>
</head>

<body class="d-flex align-items-center h-100">
    <!-- Content -->

    <div class="container justify-content-center d-flex align-items-center">
        <div class="authentication-wrapper authentication-basic  col-11 col-md-6 col-lg-5 ">
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">

                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Atualizar a senha? </h4>
                        <p class="mb-4">Digite seu email e siga as instruções para atualizar a sua senha</p>
                        <form id="formAuthentication" class="mb-3" method="POST">
                            <div class="mb-3 ">
                                <label for="logarComo" class="form-label">tipo de usuario</label>
                                <select name="logar" id="logarComo" class="form-select" required>
                                    <option value="1">Doador</option>
                                    <option value="2">Organização</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email..." autofocus />
                            </div>
                            <input type="submit" class="btn btn-primary d-grid w-100" name="SendRecupSenha" value="Enviar para o email"></input>
                        </form>
                        <div class="text-center">
                            <a href="login.php" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Voltar ao login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <?php require_once('linkFinal.php') ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>
</body>

</html>

<?php
include_once('conexao/Conexao.php');
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['SendRecupSenha'])) {
    $tipo = $dados['logar'];
    $email = $dados['email'];

    // doador
    if ($tipo == '1' || $tipo == 1) {

        $sql = "SELECT  * FROM `tbl_doador` WHERE  `doador_Email` = '$email' and `doador_ativo`=1 limit 1";

        $rs = mysqli_query($con, $sql) or die("Erro no select login");

        if ($inf = mysqli_fetch_array($rs)) {
            $id = $inf['doador_Id'];
            $nomeDoador = $inf['doador_Nome'];
            $emailDoador = $inf['doador_Email'];
            $chave_recuperar_senha = password_hash($id, PASSWORD_DEFAULT);
            // echo "Chave $chave_recuperar_senha <br>";
            $sql2 = "UPDATE `tbl_doador` SET `doador_RecuperarSenha`='$chave_recuperar_senha' WHERE doador_Id = $id limit 1";
            $rs2 =  mysqli_query($con, $sql2) or die("Erro no select login");
            if ($rs2) {
                $link = "http://localhost/TCC-Do-Ar/TCC-DO-AR/atualizarSenha.php?valor=" . $tipo . "&&chave=" . $chave_recuperar_senha;

                // email
                try {
                    /*$mail->SMTPDebug = SMTP::DEBUG_SERVER;*/
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = '3ac9cd5f940f3d';
                    $mail->Password   = '8c73848077ffbf';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 2525;

                    $mail->setFrom('doar@gmail.com', 'Atendimento');
                    $mail->addAddress($emailDoador, $nomeDoador);

                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperar senha';
                    $mail->Body    = 'Prezado(a) ' . $nomeDoador . ".<br><br>Você solicitou alteração de senha.<br><br>Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: <br><br><a href='" . $link . "'>" . $link . "</a><br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.<br><br>";
                    $mail->AltBody = 'Prezado(a) ' . $nomeDoador . "\n\nVocê solicitou alteração de senha.\n\nPara continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: \n\n" . $link . "\n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.\n\n";

                    $mail->send();

                    echo "email enviado";
                } catch (Exception $e) {
                    echo "Erro ao tentar enviar o email. Mailer Error: {$mail->ErrorInfo}";
                }

                // fim do email
            } else {
                $_SESSION['erro'] = 22;
                die();
            }
        } else {
            $_SESSION['erro'] = 9;
            die();
        }

        // organizacao
    } else if ($tipo == '2' || $tipo == 2) {
        $sql3 = "SELECT  `org_Id`,  `login_Organizacao` FROM `tbl_organizacao` WHERE `login_Organizacao` = '$email' and `org_ativo`=1 limit 1";

        $rs3 = mysqli_query($con, $sql3) or die("Erro no select login");

        if ($inf3 = mysqli_fetch_array($rs3)) {
            $idOrg = $inf3['org_Id'];
            $chave_recuperar_senha2 = password_hash($idOrg, PASSWORD_DEFAULT);
            // echo "Chave $chave_recuperar_senha <br>";
            $sql4 = "UPDATE `tbl_organizacao` SET `org_RecuperarSenha`='$chave_recuperar_senha2' WHERE `org_Id` = $idOrg limit 1";

            $rs4 =  mysqli_query($con, $sql4) or die("Erro no select login");
            if ($rs4) {
                echo "http://localhost/TCC-Do-Ar/TCC-DO-AR/atualizarSenha.php?valor=" . $tipo . "&&chave=" . $chave_recuperar_senha2;
            } else {
                $_SESSION['erro'] = 22;
                die();
            }
        } else {
            $_SESSION['erro'] = 9;
            die();
        }
    }
}


?>