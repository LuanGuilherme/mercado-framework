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
			<img src="publico/img/s1.jpg">
			<img src="publico/img/s2.jpg">
			<img src="publico/img/s3.jpg">
			<img src="publico/img/s4.jpg">
			<img src="publico/img/s5.jpg">
		</marquee>
		<?php foreach ($produtos as $produto) : ?>

		<?php if ($produto["idimg"] <= 12) : ?>
		<figure id="prod1">
			<a href="detalharProduto.php?idproduto=<?=$produto['idproduto']?>&produto=<?=$produto['idimg'] ?>"><img src="<?=$produto['img'] ?>"></a>
			<figcaption><strong><?=$produto["nomeproduto"]?>:<?=$produto["preco"]?></strong> <br> <?=$produto["descproduto"]?></figcaption>
		</figure>
		<?php 
		endif;
		endforeach; 
		?>
	</div>
</body>
</html>