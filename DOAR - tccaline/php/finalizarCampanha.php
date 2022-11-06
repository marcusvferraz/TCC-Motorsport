<?php

$recebe = false;

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $recebe = true;
}

if (isset($_FILES['arquivo2'])) {
    $arquivo = $_FILES['arquivo2'];
    $recebe = true;
}

if (isset($_FILES['arquivo3'])) {
    $arquivo = $_FILES['arquivo3'];
    $recebe = true;
}

if ($recebe) {
    $fk = $_POST['id'];

    if ($arquivo['error']) {
        $_SESSION['erro'] = 1;
        header('location: ../entCampanhaFinalizada.php?id=' . $fk);
        die();
    }

    // 2097152 kilobyte são 2 megabytes 
    // 1024 bytes = 1kb
    // 1024 kb = 1M
    if ($arquivo['size'] > 2097152) {
        $_SESSION['erro'] = 2;
        header('location: ../entCampanhaFinalizada.php?id=' . $fk);
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
        header('location: ../entCampanhaFinalizada.php?id=' . $fk);
        die();
    }

    // move o arquivo para a pasta, dá a ele o novo nome concatenando-o a extensão
    $deuCerto = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNome . "." . $extensao);

    if ($deuCerto) {
        $image = $novoNome . "." . $extensao;

        session_start();
        $id = $_SESSION['id'];
        include_once('../conexao/Conexao.php');

        $sql = "INSERT INTO  `tbl_imagem` (`img_Imagem`,`fk_Camp_Imagem`)  values ('$image' ,' $fk')";

        $rs = mysqli_query($con, $sql) or die('Erro ao tentar atualizar.');

        if ($rs) {
            $_SESSION['sucesso'] = 8;
            header('location: ../entCampanhaFinalizada.php?id=' . $fk);
            die();
        } else {
            $_SESSION['erro'] = 10;
            header('location: ../entCampanhaFinalizada.php?id=' . $fk);
            die();
        }
    } else {
        $_SESSION['erro'] = 7;
        header('location: ../entCampanhaFinalizada.php?id=' . $fk);
        die();
    }
} else {
    $_SESSION['erro'] = 16;
    header('location: ../entCampanhaFinalizada.php?id=' . $fk);
    die();
}
