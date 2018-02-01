<?php 
include 'conexao.php';

$reajuste = $_POST['reajuste'];


$reajuste = ($reajuste/100)+1;

$sql = "UPDATE funcionario SET salario= $reajuste * salario";

if ($conn->query($sql) === TRUE) {
	echo "Reajuste atualizado com sucesso";

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>