 <?php

    $con = new mysqli("localhost", "root", "", "doar");

    if ($con->connect_errno) {
        echo 'falha ao conectar: (' . $mysqli->connect_errno . ')' . $mysqli->error;
    }


    ?>
