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
		<form method="POST" action="update.php">

		<div class="form-group">
			<label > Nome </label>
			<input type="number" name="nome" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label> Cargo </label>
			<input type="text" name="cargo" class="form-control form-control-lg" />     
		</div>

    <div class="form-group">
      <label> Sexo </label>
      <input type="texto" name="sexo" class="form-control form-control-lg" />
    </div>

      <div class="form-group">
      <label> Salario </label>
      <input type="text" name="salario" class="form-control form-control-lg" />
    </div>

      <div class="form-group">
      <label> Demissao </label>
      <input type="text" name="demissao" class="form-control form-control-lg" />
    </div>

      <div class="form-group">
      <label> Telefone </label>
      <input type="number" name="telefone" class="form-control form-control-lg" />
    </div>

      <div class="form-group">
      <label> Endereço </label>
      <input type="texto" name="endereco" class="form-control form-control-lg" />
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