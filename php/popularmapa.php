<?php
include ("conecta_bd.php"); 

$_sql = "select * from postos_saude";
    $_res = $_conecta->query($_sql);
    if($_res === FALSE){
        echo "Erro na consulta do banco de dados.".$_conecta->error."<br/>";
    } else{

    }

    $ps_saude = array();

    while($_loc = $_res->fetch_assoc()){



        array_push($ps_saude, $_loc);
    }
$_conecta->close();
?>
