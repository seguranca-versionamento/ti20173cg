<?php
include "conexao.php";

$cpf= $_POST['cpf'];
$senha = $_POST['senha'];
session_start();

$sql = "SELECT * FROM funcionario WHERE (cpf)=('$cpf') AND (senha)=('$senha')";
$result = $conn->query($sql);



if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		$nome= $row['nome'];
		$cargo= $row['cargo'];

		$_SESSION['cpf']= $cpf;
      	$_SESSION['cargo'] = $cargo;
      $_SESSION['nome'] = $nome;
    echo "$nome conectado com sucesso!";
	
	HEADER('location: perfil.php');

	}
}
else{
	HEADER('location: index.php');
}
$conn->close();
?>