



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
    
<?php
include "conexao.php";
session_start();
$mes = $_POST['mes'];


$sql = "SELECT * FROM pagamento WHERE idpag=$mes";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $sala= $row['salario'];

if ($row['vt'] == "Sim") {
  $vat = $row['salario'] * 0.06;
  
}
else{
  $vat = 0;}
 
  if ($row['salario']<=1693.72) {
    $inss = $sala *0.08;
  }
  if ($row['salario']>=1693.7 && $row['salario']<=2822.90) {
    $inss = $sala *0.09;
  }
   if ($row['salario']>=2822.91 && $row['salario']<=5645.80) {
    $inss = $sala *0.11;
  }
  if ($row['salario']>=5645.81) {
    $inss = 621.04;
  }



$total =$sala-$vat-$inss;
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color: red;">ABC Negócios</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col" style="color: red;" >Recibo de Pagamento de Salário</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">R. Barcelos Domingos</th>
      <td></td>
      <td></td>
      <td>Mês de Referência: <?php echo $mes;?></td>
    </tr>
    <tr>
      <th scope="row">Seu CPF:</th>
      <td><?php echo $row['cpf'];?></td>
      <td></td>
      <td></td>
    </tr>

</table>

<table class="table table-sm table-ligth">
  <thead>
    <tr>
      <th scope="col">Descrição</th>
      <th scope="col">Vencimentos</th>
      <th scope="col">Descontos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Salário</td>
      <td><?php echo $f=number_format($sala,2,',','.');?></td>
      <td></td>
    </tr>
    <tr>
      <td>Vale-transporte</td>
      <td></td>
      <td><?php echo $f=number_format($vat,2,',','.');?></td>
    </tr>
    <tr>
     <td>INSS</td>
      <td></td>
      <td><?php echo $f=number_format($inss,2,',','.');?></td>
    </tr>
    <tr>
      <td colspan="2">Total Liquido:</td>
      <td><?php echo $f=number_format($total,2,',','.');?></td>
    </tr>
  </tbody>
</table>
<a class="btn btn-dark" href="perfil.php">Voltar</a>

<?php

  }
}
    
else{
  echo "Error: ".$sql."<br>".$conn->error;
}
?>
    </section>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>