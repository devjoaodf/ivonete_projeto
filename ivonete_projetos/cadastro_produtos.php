<html>
    <head>
        <title>Cadastrar Produtos</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h3>Produtos</h3>
    <form action="cCadastro_produtos.php" method="POST">
    <input type="text" name="nome_produto" placeholder="nome do produto"><br><br>
    Tipo do produto:
    <select name="tipo">
        <option value="---">---</option>
        <option value="congelado">Congelado</option>
        <option value="nao-perecivel">Não perecivel</option>
        <option value="perecivel">Perecivel</option>
    </select><br><br>
    <input type="number" name="peso" placeholder="Peso do produto em KG"><br><br>
    <input type="text" name="quantidade" placeholder="Inserir quantidade"><br><br>
    <input type="submit" name="Enviar" value="Enviar"><br><br>
    <input type="reset" name="Limpar" value="Limpar">
</form>
    </body>
</html>














    </body>
</html>