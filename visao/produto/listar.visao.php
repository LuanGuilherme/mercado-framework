<!DOCTYPE html>
<html>
<head>
	<title>Corpo</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 id="tituProdutos">Produtos em destaque</h1>
	<div id="produtos">
		<?php foreach ($produtos as $produto) : ?>

		<figure id="prod1">
		<?php $nome = $produto["nomeproduto"] ?>
			<a href='./produto/detalhar/<?=$nome?>'><img src="<?=$produto['img'] ?>"></a>
			<figcaption><strong><?=$produto["nomeproduto"]?>: R$ <?=$produto["preco"]?></strong> <br> <?=$produto["descproduto"]?></figcaption>
		</figure>
		<?php endforeach; ?>
	</div>
</body>
</html>