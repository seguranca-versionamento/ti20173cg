<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

    <title>Gerenciamento</title>
  </head>
  <body>
    <header>
      <p>&nbsp;</p>
  
  <div class = "container">
    <center><h1 class="display-4">O que deseja fazer?</h1></center>  
      <hr/>
  </div>

  
  

    </header>
<section>
  <?php

  session_start();
  
  $cargo = $_SESSION['cargo'];
  $nome = $_SESSION['nome'];
  
  echo "$nome ";
  echo "$cargo";

  
  if($_SESSION['cargo'] == 'rh'){
    
    echo '

  <ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link active" name= "pagamento" href="pagamento.php" style="color: #000;">Pagamentos</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" name= "cadf" href="cadf.php" style="color: #000;">Cadastro de Funcionários</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" name="reajuste" href="reajuste.php" style="color: #000;">Reajuste</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" name="editf" href="editf.php" style="color: #000;">Atualização de Cadastro</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" name="contra" href="contracheque.php" style="color: #000;">Contracheque</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" name="sair" href="sair.php" style="color: #000;">Desconectar</a>
  </li>

</ul>

';

  }

  else {
    echo '

  <ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link active" name="contra" href="contracheque.php" style="color: #000;">Contracheque</a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" name="sair" href="sair.php" style="color: #000;">Desconectar</a>
  </li>


  
</ul>

  ';

  }


  ?>

</section>

<footer>

</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>