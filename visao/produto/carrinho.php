<?php 
require '../cabecalho.php';
require 'controlador/produtoContralador.php';
@$idproduto = $_GET["idproduto"];
setcookie("$idproduto", $idproduto);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="carro">
		<h1>Carrinho</h1>
		<?php foreach ($_COOKIE as $exibe) :
		if ($exibe != $_COOKIE["PHPSESSID"]): 
			selectImagem($exibe);
			$printa = $registro2["img"];

			selectProduto($exibe);
			$idproduto = $registro["idproduto"];
			?>
			<img src="<?php echo $printa; ?>"> 
			<p><?php echo $registro["nome"]." ".$registro["preco"]; ?></p>
		<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<?php require '../rodape.php'; ?>
	<?php 
		if($_GET['refreshed'] != 'yes'){ 
			echo "<meta http-equiv=\"refresh\" content=\"0;url={$_SERVER['REQUEST_URI']}&refreshed=yes\">"; 
		}
	?>
</body>
</html>