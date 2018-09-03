<!DOCTYPE html>
<html>
<head>
	<title>Corpo</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 id="tituProdutos">Produtos em destaque</h1>
	<div id="produtos">
		<marquee behavior="alternate" direction="left">
			<img src="img/s1.jpg">
			<img src="img/s2.jpg">
			<img src="img/s3.jpg">
			<img src="img/s4.jpg">
			<img src="img/s5.jpg">
		</marquee>
		<?php foreach ($produtos as $produto) : ?>

		<?php if ($produto["idimg"] <= 12) : ?>
		<figure id="prod1">
			<!--<a href="detalharProduto.php?idproduto=<?=$produto['idproduto']?>&registro2=<?=$registro2['idimg'] ?>"><img src="<?=$registro2['img'] ?>"></a>-->
			<figcaption><strong><?=$produto["nomeproduto"]?>:<?=$produto["preco"]?></strong> <br> <?=$produto["descproduto"]?></figcaption>
		</figure>
		<?php 
		endif;
		endforeach; 
		?>
	</div>
</body>
</html>