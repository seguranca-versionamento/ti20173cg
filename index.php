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
<p></p>
<h2>Página RH</h2>
<p></p>
<br/>
<h3 style="font-family: arial;">Faça o seu login</h3>
<hr/>
<form method="POST" action="login.php" >
  <div class="form-group ">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" name="cpf" aria-describedby="emailHelp" placeholder=" Digite o seu CPF">
    <small id="emailHelp" class="form-text text-muted">Nós nunca compartilhamos as suas informações com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha" placeholder=" Digite a sua senha">
  </div>
  <button style="" type="submit" class="btn btn-dark btn-outline">Entrar</button>
 
</form>

</body>
</html>