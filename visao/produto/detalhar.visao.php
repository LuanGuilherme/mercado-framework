<body>
	<div id="detalhar">
		<h1><?=$registro["nomeproduto"];?></h1>
		<img id="img" src="<?=$registro['img']?>">
		<div id="valor">
			<a href="./produto/carrinho/<?=$registro['nomeproduto']?>"><img id="comprar" src="publico/img/botao-comprar.png"></a>
			<br><p><?=$registro["preco"]?></p>
		</div>
		<br><p><?=$registro["descproduto"]?></p> <br><br>
		<a href="./produto">Retornar aos produtos</a>
	</div>
</body>