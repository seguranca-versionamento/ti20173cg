<?php
include 'conexao.php';
$id =$_POST['id'];
$cargo = $_POST['cargo'];
$sexo = $_POST['sexo'];
$salario = $_POST['salario'];
$demissao = $_POST['demissao'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];



$sql = "UPDATE funcionario SET cargo = '$cargo',  sexo = '$sexo', salario = '$salario', demissao = '$demissao', telefone = '$telefone', endereco = '$endereco' WHERE id = $id"  ;

if ($conn->query($sql) === TRUE) {                                                            
echo "Atualizado com sucesso";
}
else{
    echo "Erro:". $conn->error;
}
 $conn->close();
?>