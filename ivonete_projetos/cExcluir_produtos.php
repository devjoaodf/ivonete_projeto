<?php
$idProduto = $_POST['id'];
include_once("conexao.php");
$sql = "DELETE FROM produtos";
$sql .= " WHERE idProduto = $idProduto";

$resultado = mysqli_query($conexao, $sql);
if($resultado){
    echo "OK";
    header("Location: tabela_estabelecimento.php");
}
else{
    echo "FALSE";
}








?>