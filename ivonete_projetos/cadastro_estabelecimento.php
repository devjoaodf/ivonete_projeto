<?php
?>
<html>
        <head>
            <title>Cadastro Estabelecimento</title>
            <meta charset="utf-8">
        </head>
        <body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <h1>Cadastro Estabelecimento</h1>
        <form action="cCadastro_estabelecimento.php" method="POST">
        <input type="text" name="nome" placeholder="Insira seu nome"><br><br>
        <input type="email" name="email" placeholder="Insira seu email"><br><br>
        <input type="password" name="senha" placeholder="Insira sua senha"><br><br>
        <input name="cnpj" type="number" placeholder="Insira o cnpj" required/><br><br>
		<input id="cep" name="cep" type="text" placeholder="Insira o cep" required/><br><br>
		<input id="endereco" name="endereco" type="text"  placeholder="Insira seu endereço" required/><br><br>
        <input id="bairro" type="text" name="bairro" placeholder="Insira seu bairro"><br><br>
        <input type="text" name="obs" placeholder="Insira a observação: loja...x"><br><br>
        <input type="tel" name="telefone" placeholder="Telefone: (xx) xxxxx-xxxx"><br><br>
        <label for="uf">Estado:</label>
		<select id="uf" name="uf">
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select><br><br>
        <input type="submit" value="Enviar"><br><br>
        <input type="reset" value="Limpar">
        </form>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>
			/*
			 * Para efeito de demonstração, o JavaScript foi
			 * incorporado no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			
			// Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
			// quando o usuário sair do campo "cep"
			$("#cep").blur(function(){
				// Remove tudo o que não é número para fazer a pesquisa
				var cep = this.value.replace(/[^0-9]/, "");
				
				// Validação do CEP; caso o CEP não possua 8 números, então cancela
				// a consulta
				if(cep.length != 8){
					return false;
				}
				
				// A url de pesquisa consiste no endereço do webservice + o cep que
				// o usuário informou + o tipo de retorno desejado (entre "json",
				// "jsonp", "xml", "piped" ou "querty")
				var url = "https://viacep.com.br/ws/"+cep+"/json/";
				
				// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
				// caso ocorra algum erro (o cep pode não existir, por exemplo) a
				// usabilidade não seja afetada, assim o usuário pode continuar//
				// preenchendo os campos normalmente
				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#endereco").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});
		</script>
    </body>
</html>