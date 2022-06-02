<?php
print_r($_POST);
$idProduto = $_POST['idProduto'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$peso = $_POST['peso'];
$quantidade = $_POST['quantidade'];

include_once("conexao.php");
$sql = "UPDATE produtos SET nome='$nome',tipo='$tipo',peso='$peso',quantidade='$quantidade'";
$sql .= "WHERE idProduto = " . $idProduto;

$resultado = mysqli_query($conexao, $sql);
if($resultado){
    echo "OK";
    header("Location: tabela_estabelecimento.php");
}
else{
    echo "FALSE";
}








?>