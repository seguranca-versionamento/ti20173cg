<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contra-Cheque</title>
  </head>
  <body>
  <header class="container">
    <h1>Contra-Cheque</h1><hr />

    </header>

    <div class="container">
    <section>
<form method="POST" action="dados_contracheque.php">

<?php
include "conexao.php";
session_start();
$cpf = $_SESSION['cpf'];
$sql = "SELECT * FROM pagamento WHERE cpf = '$cpf'";
$result = $conn->query($sql);



?>


<br>
<h3>Selecione o Mês e o Ano Referente</h3>
    <div class="form-group">
      <label for="mes">Mês </label>
      <select name="mes" id="mes" class="form-control form-control-lg">
      <?php
      if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    ?>
        <option value="<?php echo $row['idpag']; ?>"><?php echo $row['mes']; ?> <?php echo $row['ano'];?></option>
<?php } ?>
      </select>
    </div>

<?php

  
}
else{
  HEADER('location: perfil.php');
}
$conn->close();
?>
<button class="btn btn-dark">Enviar</button>
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
