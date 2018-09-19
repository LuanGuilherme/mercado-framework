<body>
	<?php if ($_SESSION["condicional"] <> 1) : ?>
	<div class="edit">
		<h1>Alterar Produto</h1>
		<form method="POST">
			Digite o nome do produto a ser alterado: <input class="alterar" type="text" name="nome"> <br>
			<input type="submit" id="botao" name="Enviar">
		</form>
	</div>
	<?php endif; ?>

	<?php if ($_SESSION["condicional"] == 1) : ?>
		<form method="POST">
			<input type="hidden" name="idproduto" 
				value="<?php echo $registro["idproduto"]; ?>">

			
			Nome do produto: <input type="text" name="nomeproduto" 
				value="<?php echo $registro["nomeproduto"];?>"> <br>
				<br>
			Preço: <input type="text" name="preco" 
				value="<?php echo $registro["preco"];?>"> <br>
				<br>
			Quantidade: <input type="text" name="quantidade" 
				value="<?php echo $registro["quantidade"];?>"> <br>
				<br>		
			Descrição: <input type="text" name="descproduto" 
				value="<?php echo $registro["descproduto"]; ?>"> <br>
				<br>
			Imagem: <select name="idimg">
				<option value="1">Tomate</option>
				<option value="2">Pão</option>
				<option value="3">Manteiga</option>
				<option value="4">Chocolate</option>
				<option value="5">Macarrão</option>
				<option value="6">Coca-cola</option>
				<option value="7">OMO</option>
				<option value="8">Sabão</option>
				<option value="9">Costela</option>
				<option value="10">Bife</option>
				<option value="11">Alface</option>
				<option value="12">Danone</option>
				<option value="13">Leite</option>
				<option value="14">Ketchup</option>
				<option value="15">Nutella</option>
				<option value="16">Leite condensado</option>
				<option value="17">gelatina</option>
				<option value="18">Molho de tomate</option>
				<option value="19">Yakult</option>
				<option value="20">Bis</option>
			</select> <br>
				<br>	
			<button type="submit">Enviar</button>
		</form>
	<?php endif; ?>
</body>
</html>
