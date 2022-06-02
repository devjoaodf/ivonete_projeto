<?php
print_r($_POST);
$nome_produto = $_POST['nome_produto'];
$tipo = $_POST['tipo'];
$peso = $_POST['peso'];
$quantidade = $_POST['quantidade'];
include_once("conexao.php");
$sql = "INSERT INTO produtos (nome,tipo,peso,quantidade)";
$sql .= " VALUES ('$nome_produto', '$tipo', '$peso', '$quantidade')";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    echo "deu certo";
    header("Location: tabela_estabelecimento.php");

}
else{
    echo "Falso";
}
?>