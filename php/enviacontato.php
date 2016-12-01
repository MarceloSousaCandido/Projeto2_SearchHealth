<?php
include("conecta_bd.php");

if (!$_conecta) {
    echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_conecta);
}

$nome = $_POST['tx_nome'];
$email = $_POST['tx_email'];
$mensagem = $_POST['tx_mensagem'];

//Insere registros no banco de dados
$_sql = "insert into contatos ( c_nome, c_email, c_mensagem) values('$nome', '$email', '$mensagem')";

$_res = $_conecta->query($_sql);

if($_res === FALSE){
    echo "Erro na inclusão do registro..." . $_conecta->error . "<br/>";
} else {
    //echo $_conecta->affected_rows . " Registro incluido com sucesso<br/>";
}
$_conecta->close();

include ('enviaemail.php');

enviaEmail($nome, $email, $mensagem);

?>
