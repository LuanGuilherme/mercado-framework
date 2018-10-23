<body>
<div class="edit">
	<h1>Adicionar Produto</h1> <br>
	<form action="" method="POST" enctype="multipart/form-data">
		Nome do Produto: <input class="form" type="text" name="nomeproduto"> <br>
		<br>
		Preço: <input class="form" type="text" name="preco"> <br>
		<br>
		Quantia em estoque: <input class="form" type="text" name="quantidade"> <br>
		<br>
		Descrição: <input class="form" type="text" name="descproduto"> <br>
		<br>
                <label for="Categoria" required="required">Categoria</label>
                <select name="Categoria">
                    <option value="3">Bebidas</option>
                    <option value="1">Frutas</option>
                    <option value="4">Doces</option>
                    <option value="2">Produtos de limpeza</option>
                </select>
                <br>
                Imagem: <input class="form" type="file" name="img"> <br>
		<br>
		<button id="botao" type="submit">Enviar</button>
	</form>
</div>
</body>