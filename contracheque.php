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


<?php
include "conexao.php";

$sql = "SELECT * FROM pagamento";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    echo "Seu salário é de: ".$row['salario']."<br/>";
    echo "Possui vale transporte: ".$row['vt']."<br/>";
    echo "Mês Referente: ".$row['mes']."<br/>";
    echo "Ano Referente: ".$row['ano']."<br/>";
  }
}
else{
  HEADER('location: pagamento.php');
}
$conn->close();
?>


<form method="POST" action="insertpg.php">
<br>
<h3>Selecione o Mês e o Ano Referente</h3>
    <div class="form-group">
      <label for="mes">Mês </label>
      <select name="mes" id="mes" class="form-control form-control-lg">
        <option value="<?php echo $salario; ?>"><?php $row['mes']; ?></option>
      </select>
    </div>

     <div class="form-group">
      <label for="vt">Ano </label>
      <select name="vt" id="vt" class="form-control form-control-lg">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
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
