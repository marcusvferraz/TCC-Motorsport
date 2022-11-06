
<?php
if ($_POST) {
    session_start();
    include '../conexao/Conexao.php';
    $email = $_POST['emailLogin'];
    $senha = $_POST['password'];
    $tipoLogin = $_POST['logar'];

    // se o valor for igual a 1 entra como doador
    if ($tipoLogin == 1) {

        $sql = "SELECT  * FROM `tbl_doador` WHERE  `doador_Email` = '$email' and `doador_ativo`=1 limit 1";

        $rs = mysqli_query($con, $sql) or die("Erro no select login");


        if ($dados = mysqli_fetch_array($rs)) {
            // verifica se a senha está correta
            $senhaBanco = $dados['doador_Senha'];

            if (password_verify($senha, $senhaBanco) == 1) {
                $_SESSION["email"] = $dados['doador_Email'];
                $_SESSION["id"] = $dados['doador_Id'];
                $_SESSION['nome'] = $dados['doador_Nome'];
                header("location: ../usuCampanhas.php");
            } else {
                $_SESSION['erro'] = 8;
                header("location: ../login.php");
            }
        } else {
            $_SESSION['erro'] = 9;
            header("location: ../login.php");
        }
    }

    // se o valor for igual a 2 ele entra como organizacao
    if ($tipoLogin == 2) {


        $sql = "SELECT  `org_Id`, `org_NomeFantasia`, `org_ImagemLogo`, `login_Organizacao`, `senha_Organizacao` FROM `tbl_organizacao` WHERE  `login_Organizacao` = '$email' and `org_ativo`=1 limit 1";

        $rs = mysqli_query($con, $sql) or die("Erro no select login");

        if ($dados = mysqli_fetch_array($rs)) {
            // verifica se a senha está correta
            $senhaBanco = $dados['senha_Organizacao'];

            if (password_verify($senha, $senhaBanco) == 1) {
                $_SESSION["email"] = $dados['login_Organizacao'];
                $_SESSION["id"] = $dados['org_Id'];
                $_SESSION["imagem"] = $dados['org_ImagemLogo'];
                $_SESSION['nome'] = $dados['org_NomeFantasia'];
                header("location: ../entCampanhas.php");
            } else {
                $_SESSION['erro'] = 8;
                header("location: ../login.php");
            }
        } else {
            $_SESSION['erro'] = 9;
            header("location: ../login.php");
        }
    }
}
