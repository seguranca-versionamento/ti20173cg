<?php 
include "conexao.php";

$cpf = $_POST['cpf'];

$nome = $_POST['nome'];

$senha = $_POST['senha'];

$sexo = $_POST['sexo'];

$nascimento = $_POST['nascimento'];

$cargo = $_POST['cargo'];

$salario = $_POST['salario'];

$contratacao = $_POST['contratacao'];

$telefone = $_POST['telefone'];

$endereco = $_POST['endereco'];





$sql = "INSERT INTO funcionario (cpf, nome, senha, sexo, nascimento, cargo, salario, contratacao, telefone, endereco) VALUES ('$cpf', '$nome', '$senha', '$sexo', '$nascimento', '$cargo', '$salario', '$contratacao', '$telefone', '$endereco')";

if ($conn-> query ($sql) === TRUE) {
	echo "Funcionário cadastrado com sucesso";
	# code...
}
else{
	echo "Error:" . $sql . "<br/>" . $conn -> error;
}

$conn->close();




 ?>