<html>
<head>
    <meta charset="utf-8">
<title>Index carrinho de compras</title>
</head>
    <body>
<?php
include_once("conexao.php");
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao,$sql);
while($arResultado = mysqli_fetch_assoc($resultado)){
echo '
<h2>'.$arResultado['nome'].'</h2>';

echo 'Preço: R$'.number_format($arResultado['preco'],2,',','.').'';
echo '<img src="image/'.$arResultado['imagem'].'"/>';
echo '<a href="carrinho.php?acao=add&id='.$arResultado['idProduto'].'">Comprar</a>';
echo '
<hr />

';
          }
    ?>

    </body>

    </html>