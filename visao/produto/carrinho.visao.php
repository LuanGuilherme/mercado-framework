<?php 
/*$nome = $registro['nomeproduto'];
$img = $registro["img"];
setcookie("$nome", $registro["nomeproduto"], time()+3600);
setcookie("$img", $registro["img"], time()+3600);
*/
$_SESSION["feio"][$cont] = $registro;
$_SESSION["cont"] += 1;
$cont = $_SESSION["cont"];
print_r($_SESSION["feio"]);
print_r($cont);
?>
<body>
	<div class="carro">
		<h1>Carrinho</h1>
		<?php foreach ($_SESSION["feio"] as $exibe) :
		//if ($exibe != $_COOKIE["PHPSESSID"]): 
			$printa = $exibe["img"];
			$nomeproduto = $exibe["idproduto"];
		?>
			<img src="<?=$printa ?>"> 
			<p><?= $exibe["nomeproduto"]." ".$exibe["preco"]; ?></p>
		<?//php endif; ?>
		<?php endforeach; ?>
	</div>
</body>
</html>