<?php
print_r($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];
$uf = $_POST['uf'];
$casa = $_POST['casa'];
$apt = $_POST['apt'];

include_once("conexao.php");
if($conexao){
    echo "OK connect";
}
else{
    echo"failed";
}
$sql = "INSERT INTO cliente (nome,email,senha,endereco,cep,uf,bairro,telefone)";
$sql .= " VALUES ('$nome', '$email','$senha','$endereco','$cep','$uf','$bairro','$telefone')";
$resultado = mysqli_query($conexao,$sql);
if($resultado){
    echo "Cadastrado com sucesso";
}
else{
    echo"cadastro falhou";
}
?>