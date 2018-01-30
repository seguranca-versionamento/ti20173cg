<?php
include "conexao.php";
session_start();

$cpf = $_SESSION['cpf'];
$salario = $_POST['salario'];
$vt = $_POST['vt'];
$mes= $_POST['mes'];
$ano = $_POST['ano'];

$sql = "SELECT * FROM pagamento";

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    echo $row['cpf']."<br/>";
    echo $row['salario']."<br/>";
    echo $row['vt']."<br/>";
    echo $row['mes']."<br/>";
    echo $row['ano']."<br/>";
  }
}
    
else{
  echo "Error: ".$sql."<br>".$conn->error;
}
?>



<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>NOME DA EMPRESA</title>
  </head>
  <body>
    

    <div class="container">
    <section>
    <h1>Atualize o cadastro</h1><hr />
    <form method="POST" action="updateeditf.php">

    <div class="form-group">
      <label > cpf</label>
      <input type="text" name="cpf" value="<?php echo $cpf; ?>"  class="form-control form-control-lg"  />
    </div>

    <div class="form-group">
      <label> salario </label>
      <input type="text" name="salario" value="<?php echo $salario; ?>" class="form-control form-control-lg" />     
    </div>

    <div class="form-group">
      <label> vt </label>
      <input type="text" name="vt" value="<?php echo $vt; ?>" class="form-control form-control-lg" />
    </div>

      <div class="form-group">
      <label> mes </label>
      <input type="text" name="mes" value="<?php echo $mes; ?>" class="form-control form-control-lg" />
    </div>

      <div class="form-group">
      <label> ano </label>
      <input type="date" name="ano" value="<?php echo $ano; ?>" class="form-control form-control-lg" />
    </div>
   <button type="submit" class="btn btn-dark btn-lg">Enviar</button>

    </form>
    </section>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>