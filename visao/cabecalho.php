<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
</head>
<body>
	<ul>
		<img id="logo" title="Mercado" src="./publico/img/logo.png">
		<li><a href="./produto">Home</a></li>
		<li><a href="./produto/selectProduto">Todos os produtos</a></li>
		<?= $_SESSION["idcliente"]["nomecliente"] == "Admin" ? "<li><a href='./produto/addProduto'>Adicionar produto</a></li>": ""; ?>
		<?= $_SESSION["idcliente"]["nomecliente"] == "Admin" ? "<li><a href='./produto/updateProduto'>Alterar produto</a></li>": ""; ?>
		<?= $_SESSION["idcliente"]["nomecliente"] == "Admin" ? "<li><a href='./produto/deleteProduto'>Deletar produto</a></li>": ""; ?>
		<?= $_SESSION["idcliente"]["nomecliente"] == "Admin" ? "": "<li><a href='./produto/contato'>Contato</a></li>"; ?>
		<?= $_SESSION["idcliente"]["nomecliente"] == "Logar" ? "<li><a href='./cliente/addCliente'>Cadastrar</a></li>": ""; ?>
		<?php if ($_SESSION["idcliente"]["nomecliente"] != "Admin") : ?>
			<form id="busca">
				<?php //require 'pesquisa.php'; ?>
			</form>
		<?php endif; 
		$nome = $_SESSION["idcliente"]['nomecliente'];
		?>
		<li id="user"><?= $_SESSION["idcliente"]["nomecliente"] == "Logar" ? "<a href='./cliente/entrar'>Logar</a><!--" : "<a href='./cliente/editar'>$nome</a>"; ?>
			<ul id="sub">
				<?= $_SESSION["idcliente"]["nomecliente"] == "Admin" ? "" : "<li><a href='./cliente/editar'>Editar</a></li>"; ?>
				<li><a href="PHP/logout.php">Sair</a></li>
			</ul>
			<?= $_SESSION["idcliente"]["nomecliente"] == "Logar" ? "-->" : ""; ?>
		</li>
		<?= $_SESSION["idcliente"]["nomecliente"] != "Admin" ? "<a href='produto/carrinho.visao.php'><img id='carrinho' src='publico/img/carrinho.png'></a>": ""; ?>
	</ul>
</body>
</html>