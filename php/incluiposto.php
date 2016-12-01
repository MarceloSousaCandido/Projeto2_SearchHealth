<?php
include("conecta_bd.php");
if (!$_conecta) {
    echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_conecta);
}

//Insere registros no bd
$nome = $_POST['tx_nomedoposto'];
$latitude = $_POST['tx_latitude'];
$longitude = $_POST['tx_longitude'];
$endereco = $_POST['tx_endereco'];
$telefone = $_POST['tx_telefone'];

$_sql = "insert into postos_saude ( p_nome, p_lat, p_lon, p_endereco, p_telefone) values('$nome', '$latitude', '$longitude', '$endereco', '$telefone')";
$_res = $_conecta->query($_sql);
if($_res === FALSE){
    echo "Erro ao incluir o registro..." . $_conecta->error . "<br/>";
} else {
    echo $_conecta->affected_rows . " Registro incluido com sucesso<br/>";
}
$_conecta->close();
header('Location:../index.php');


?>
