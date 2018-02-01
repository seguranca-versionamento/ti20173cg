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




 <!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width" />
	<title>RH</title>
	
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
<hr/>
<a class="btn btn-dark" href="reajuste.php" role="button">Voltar</a>
 </html>