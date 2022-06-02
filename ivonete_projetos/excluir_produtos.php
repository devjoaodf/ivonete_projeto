<?php
$id = $_GET['a'];
include_once("conexao.php");
$sql = "SELECT * FROM produtos";
$sql .= " WHERE idProduto = " . $id;
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <head>
        <title>Editar produto</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="cExcluir_produtos.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $arResultado['idProduto']?>">
        <?php echo $arResultado['idProduto'];?>
    Nome:
     <?php echo $arResultado ['nome']?><br><br>
    Tipo do produto:
     <?php echo $arResultado ['tipo']?><br><br>
    Peso:
    <?php echo $arResultado ['peso']?><br><br>
    Quantidade:
    <?php echo $arResultado ['quantidade']?><br><br>
    <input type="submit" value="Excluir"><br><br>
    <a href="tabela_estabelecimento.php">Voltar a pagina anterior</a>

        </form>
    </body>
</html>