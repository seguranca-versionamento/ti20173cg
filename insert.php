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
	echo "Funcionário cadastrado com sucesso<br/>";

}

else{
	echo "Error:" . $sql . "<br/>" . $conn -> error;

}

$conn->close();




 ?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width" />
	<title>Login RH</title>
	
  <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="estilo/estilo.css" />
  <link rel="icon" type="image/jpg" href="i.jpg">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	
</head>
<body class="container">


<header>
	
</header>
<a class="btn btn-dark" href="index.php" role="button">Voltar</a>
 </html>