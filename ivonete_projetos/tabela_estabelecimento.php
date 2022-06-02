<?php
include_once("conexao.php");
$sql = "SELECT * FROM produtos WHERE idProduto";
$resultado = mysqli_query($conexao, $sql);
$arResultado =mysqli_fetch_assoc($resultado);
?>
<html>
    <head>
        <title>Table de produtos
        </title>
        <meta charset="utf-8">
    </head>
    <body>
<table border="1">
    <tr>
        <th>nome_produto</th>
        <th>tipo_produto</th>
        <th>peso</th>
        <th>quantidade</th>
        <th>Editar</th>
        <th>Excluir</th>
        <th>Adicionar_Produtos</th>
    </tr>
    <?php do{?>
    <tr>
        <td>
            <?php echo $arResultado['nome']?>
        </td>
        <td>
            <?php echo $arResultado['tipo']?>
        </td>
        <td>
            <?php echo $arResultado['peso']?>
        </td>
        <td>
            <?php echo $arResultado['quantidade']?>
        </td>
        <td><a href="editar_produtos.php?a=<?php echo $arResultado ['idProduto']?>">Editar</a></td>
        <td><a href="excluir_produtos.php?a=<?php echo $arResultado ['idProduto']?>">Excluir</a></td>
        <td style="text-align:center"><a href="cadastro_produtos.php">Adicionar+</a></td>

    </tr>
    <?php 
    } while($arResultado = mysqli_fetch_assoc($resultado));
    ?>
</table>





    </body>
</html>
