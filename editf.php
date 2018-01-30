
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<?php
include "conexao.php";


$sql= "SELECT * FROM funcionario";
$result = $conn->query($sql);

if($result->num_rows>0){
  echo "<div class = 'container form-control form-control-lg ' > <form method= 'POST' action = 'editfnome.php'>";
  echo "<div class ='text-center'><select  name='id'>";

  while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $nome = $row['nome'];
    echo "<option value = '$id'> $nome </option>";
        
  }
  echo "</select>";
  echo "</br><button type = 'subimit' class='btn btn-dark btn-sm' > EDITAR </button> </div> " ;
  echo "</form> </div>";

}
else {
  echo "0 resultados";
}
$conn ->close();
?>








