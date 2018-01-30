<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pagamentos</title>
  </head>
<body>
<header></header>
<section>

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
	
	echo '
		</br>
		<p>&nbsp;</p>
		<div class = "container">
		<center><h2>Pagamento Inserido com sucesso!</h2></center>
		<hr/>
		</div>
		';
}
else{
	echo 'Error: '.$sql.'<br>'.$conn->error;
	
	header("Location: perfil.php");
}



?>
</section>
<footer></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>