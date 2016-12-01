<?php

    $_conecta = mysqli_connect('localhost','marcelo','marcelo','2185487_prdwe1');
        if (!$_conecta) {
            echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_conecta);
        }
?>
