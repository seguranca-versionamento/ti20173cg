  <?php

  include "conexao.php";


$sql= "SELECT * FROM funcionario";
$result = $conn->query($sql);

if($result->num_rows>0){
  echo "<form method= 'POST' action = 'dados_contracheque.php'>";
  echo "<select name='id'>";

  while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $nome = $row['nome'];
    echo "<option value = '$id'> $nome </option>";
        
  }
  echo "</select>";
  echo "<button type = 'subimit'> SELECIONAR </button>";
  echo "</form>";

}
else {
  echo "0 resultados";
}
$conn ->close();
?>