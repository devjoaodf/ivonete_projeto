<?php
$id = $_GET['a'];
include_once("conexao.php");
$sql = "SELECT * FROM produtos WHERE idProduto ='$id'";
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <head>
        <title>Editar produto</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="cEditar_produtos.php" method="POST">
        <input type="hidden" name="idProduto" value="<?php echo $_GET['a']?>">
    Nome:
    <input type="text" name="nome" value="<?php echo $arResultado ['nome']?>"><br><br>
    Tipo do produto:
    <select value="tipo" name="tipo">
        <option value="<?php echo $arResultado ['tipo']?>"><?php echo $arResultado ['tipo']?></option>
        <option value="congelado">Congelado</option>
        <option value="nao-perecivel">nao-perecivel</option>
        <option value="perecivel">Perecivel</option>
    </select><br><br>
    Peso:
    <input type="text" name="peso" value="<?php echo $arResultado ['peso']?>"><br><br>
    Quantidade:
    <input type="text" name="quantidade" value="<?php echo $arResultado ['quantidade']?>"><br><br>
    <input type="submit" value="Editar"><br><br>
    <input type="reset" value="Voltar ao padrão">

        </form>
    </body>
</html>