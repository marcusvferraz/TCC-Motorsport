<?php

if (isset($_FILES['arquivo'])) {
    session_start();

    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error']) {
        $_SESSION['erro'] = 1;
        header('location: ../entDetalheCampanha.php?id=' . $id);
        die();
    }

    // 2097152 kilobyte são 2 megabytes 
    // 1024 bytes = 1kb
    // 1024 kb = 1M
    if ($arquivo['size'] > 2097152) {
        $_SESSION['erro'] = 2;
        header('location: ../entDetalheCampanha.php?id=' . $id);
        die();
    }

    // pasta onde a imagem será salva
    $pasta = "../img/imagemUsuario/imgCampanha/";

    //   guarda o nome antigo da imagem
    $nomeArquivo = $arquivo['name'];

    // cria um novo nome unico para a imagem
    $novoNome = uniqid();

    // pega a extensão do aquivo(jpeg,jpg,png) e guarda na variavel em letras minusculas
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    // verifica se a extensao do arquivo é aceita
    if ($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg") {
        $_SESSION['erro'] = 3;
        header('location: ../entDetalheCampanha.php?id=' . $id);
        die();
    }

    // move o arquivo para a pasta, dá a ele o novo nome concatenando-o a extensão
    $deuCerto = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNome . "." . $extensao);

    if ($deuCerto) {
        $image = $novoNome . "." . $extensao;
        $id = $_SESSION['idCampMomento'];
        $fk = $_SESSION['id'];

        include_once('../conexao/Conexao.php');

        $sql = "UPDATE `tbl_campanha` SET `camp_Imagem`='$image'  WHERE `camp_Id`=$id and `fk_Org_Campanha`= $fk";

        $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

        if ($rs) {
            $_SESSION['sucesso'] = 3;
            header('location: ../entDetalheCampanha.php?id=' . $id);
        } else {
            $_SESSION['erro'] = 10;
            header('location: ../entDetalheCampanha.php?id=' . $id);
        }
    } else {
        $_SESSION['erro'] = 7;
        header('location: ../entDetalheCampanha.php?id=' . $id);
        die();
    }
}
