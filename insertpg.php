<?php
include "conexao.php";
session_start();

$cpf = $_SESSION['cpf'];
$nome = $_SESSION['nome'];
$salario = $_POST['salario'];
$vt = $_POST['vt'];
$mes= $_POST['mes'];
$ano = $_POST['ano'];

$sql = "INSERT INTO pagamento (cpf, salario, vt, mes, ano) VALUES ('$cpf', '$salario', '$vt', '$mes', '$ano')";
if($conn->query($sql) === TRUE){
	echo "Pagamento Inserido com sucesso!";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>