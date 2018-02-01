<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pagamento</title>
  </head>
  <body>
  <header class="container">
    <h1>Pagamento</h1><hr />

    </header>

    <div class="container">
    <section>

<p>&nbsp;</p>
<button type="button" class="btn btn-outline-dark"><a href="perfil.php" style="color: #000;">Voltar</a></button>
<p>&nbsp;</p>

<?php
include "conexao.php";
$cpf = $_POST['cpf'];

$sql = "SELECT * FROM funcionario WHERE (cpf)=('$cpf') ";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['nome']."<br/>";
		echo $row['salario']."<br/>";
    $salario = $row['salario'];
	}
}
else{
	HEADER('location: pagamento.php');
}
$conn->close();
?>

<form method="POST" action="insertpg.php">

    <div class="form-group">
      <label for="vt">Vale Transporte: </label>
      <select name="vt" id="vt" class="form-control form-control-lg">
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
      </select>
    </div>

    <div class="form-group">
      <label for="mes">Mês: </label>
      <input type="text" name="mes" class="form-control form-control-lg" />,
      <input type="hidden" name="cpf" value="<?php  echo $cpf ?>">
    </div>

     <div class="form-group">
      <label for="ano">Ano: </label>
      <input type="text" name="ano" class="form-control form-control-lg" />
    </div>
      <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
      <input type="hidden" name="salario" value="<?php echo $salario; ?>">
    </form>


</section>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
