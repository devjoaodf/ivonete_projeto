<?php
include_once("conexao.php");
$sql = "SELECT idProduto,nome,tipo FROM produtos WHERE tipo = 'congelado'";
$resultado = mysqli_query($conexao,$sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <head>
        <title>Produtos</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Produtos</h1>
    <form action="pedidos.php" method="POST">
    <b> Congelados:</b>
    <select name="congelados">
    <?php 
    do{ 
        ?>
    
    <option><?php echo $arResultado['nome']?></option>
    <?php } while($arResultado = mysqli_fetch_assoc($resultado));
    ?>
    </select><br><br>
    
    <b>Não Pereciveis::</b>
    <select name="nao-perecivel" id="produto1">
<?php 
$sql = "SELECT idProduto,nome,tipo FROM produtos WHERE tipo = 'nao-perecivel'";
$resultado = mysqli_query($conexao,$sql);
$arResultado = mysqli_fetch_assoc($resultado);
do{
    ?>
     <option><?php echo $arResultado['nome']?></option>
    <?php 
}while($arResultado = mysqli_fetch_assoc($resultado));
    ?>
    </select><br><br>
    <b>Pereciveis:</b>
    <select name="nao-pereciveis">
    <?php
$sql = "SELECT idProduto,nome,tipo FROM produtos WHERE tipo = 'perecivel'";
$resultado = mysqli_query($conexao,$sql);
$arResultado = mysqli_fetch_assoc($resultado);
    do{
    ?>
    <option><?php echo $arResultado['nome']?></option>
    <?php
    }while($arResultado = mysqli_fetch_assoc($resultado));
    ?>
    </select>
    
    <select name="nao-pereciveis">
    <?php
$sql = "SELECT idProduto,nome,tipo FROM produtos WHERE tipo = 'perecivel'";
$resultado = mysqli_query($conexao,$sql);
$arResultado = mysqli_fetch_assoc($resultado);
    do{
    ?>
    <option><?php echo $arResultado['nome']?></option>
    <?php
    }while($arResultado = mysqli_fetch_assoc($resultado));
    ?>
    </select>



    </form>










    </body>
</html>
