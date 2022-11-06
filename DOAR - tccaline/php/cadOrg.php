<?php

// upload de imagem

// se o arquivo foi recebido
if (isset($_FILES['arquivo'])) {
    session_start();
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error']) {
        $_SESSION['erro'] = 1;
        header('location: ../cadEntidade.php');
        die();
    }

    // 2097152 kilobyte são 2 megabytes 
    // 1024 bytes = 1kb
    // 1024 kb = 1M
    if ($arquivo['size'] > 2097152) {
        $_SESSION['erro'] = 2;
        header('location: ../cadEntidade.php');
        die();
    }

    // pasta onde a imagem será salva
    $pasta = "../img/imagemUsuario/orgPerfil/";

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

        //pega a data atual
        $dataCadastro =  date('Y-m-d');
        // 1 = adm, 2=org, 3=doador, 4=motoboy
        define("TIPOCADASTRO", 2);


        // se foi recebido por metodo $_POST
        if ($_POST) {

            include_once('../conexao/Conexao.php');
            // recebe por metodo post e guarda na variavel
            $cnpj = $_POST['cnpj'];
            $razaoSocial = $_POST['razaoSocial'];
            $nomeFantasia = $_POST['nomeFantasia'];
            $telefone = $_POST['telefone'];
            $telefone2 = $_POST['telefone2'];
            $celular = $_POST['celular'];
            $cep = $_POST['cep'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $complement = $_POST['complemento'];
            $nomeResp = $_POST['nomeResponsavel'];
            $cpfResp = $_POST['cpfResp'];
            $celularResp = $_POST['celularResp'];
            $emailResp = $_POST['emailResp'];
            $senha = $_POST['password'];
            $emailLogin = $_POST['emailLoginOrg'];
            $senha2 = $_POST['password2'];

            if ($senha != $senha2) {
                $_SESSION['erro'] = 11;
                header('location: cadUsuario.php');
                die();
            }

            // variaveis vazias
            $site = ' ';
            $sobre = ' ';
            $ativo = 1;

            // chama as funcoes 
            require_once('../php/funcoes.php');

            // retira a mascara 
            $cnpj = retirarMask($cnpj);
            $telefone = retirarMask($telefone);
            $cpfResp = retirarMask($cpfResp);
            $telefone2 = retirarMask($telefone2);
            $celular = retirarMask($celular);
            $cep = retirarMask($cep);

            // criptografa a senha e guarda em uma nova variavel
            $senhaCrip = password_hash($senha, PASSWORD_DEFAULT);

            // vai inserir na tabela
            $sql = "INSERT INTO `tbl_organizacao` (`org_CNPJ`, `org_RazaoSocial`, `org_NomeFantasia`,`org_CEP`,`org_Estado`, `org_Cidade`,`org_Bairro`,`org_Rua`,`org_Numero`,`org_Complemento`,`org_Telefone1`, `org_Telefone2`, `org_Celular`,`org_ImagemLogo`,`login_Organizacao`,`senha_Organizacao`,`org_DataCadastroSite`,`org_site`,`org_Sobre`,`org_ativo`) 
            VALUES ('$cnpj','$razaoSocial','$nomeFantasia','$cep','$estado','$cidade','$bairro','$rua','$numero','$complement','$telefone','$telefone2','$celular','$image','$emailLogin','$senhaCrip','$dataCadastro','$site','$sobre','$ativo')";


            $res = mysqli_query($con, $sql) or die('Houver um erro na conexao com o banco de dados!');

            if ($res) {

                // se der certo vai pegar o id e guardar
                //o id sera usado como fk na tabela de responsavel
                $fk = mysqli_insert_id($con);

                $sql2 = "INSERT INTO `tbl_responsavel`( `resp_CPF`, `resp_Nome`, `resp_Email`, `resp_Celular`, `fk_Org_Responsavel`) VALUES ('$cpfResp','$nomeResp','$emailResp','$celularResp','$fk')";

                $res2 = mysqli_query($con, $sql2) or die('erro na conexao ou sql');
                if ($res2) {
                    $_SESSION['sucesso'] = 4;
                } else {
                    $_SESSION['erro'] = 5;
                    header('location: ../cadEntidade.php');
                    die();
                }
            } else {
                $_SESSION['erro'] = 6;
                header('location: ../cadEntidade.php');
                die();
            }
        }
    } else {
        $_SESSION['erro'] = 7;
        header('location: ../cadEntidade.php');
        die();
    }
}
