<?php
print_r($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cnpj = $_POST['cnpj'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$obs = $_POST['obs'];
$telefone = $_POST['telefone'];
$uf = $_POST['uf'];

include_once("conexao.php");
if($conexao){
    echo "OK connect";
}
else{
    echo"failed";
}
$sql = "INSERT INTO estabelecimento (nome,email,senha,cnpj,endereco,cep,uf,bairro,telefone,obs)";
$sql .= " VALUES ('$nome', '$email','$senha','$cnpj','$endereco','$cep','$uf','$bairro','$telefone','$obs')";
$resultado = mysqli_query($conexao,$sql);
if($resultado){
    echo "Cadastrado com sucesso";
}
else{
    echo"cadastro falhou";
}
?>