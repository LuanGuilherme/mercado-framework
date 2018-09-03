<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
</head>
<body>
	<ul>
		<img id="logo" title="Mercado" src="./publico/img/logo.png">
		<li><a href="index.php">Home</a></li>
		<li><a href="listarProduto.php">Todos os produtos</a></li>
		<?php $nome == "Admin" ? "<li><a href='formularioProduto.php'>Adicionar produto</a></li>": ""; ?>
		<?php $nome == "Admin" ? "<li><a href='PHP/selecionarAlterarProduto.php'>Alterar produto</a></li>": ""; ?>
		<?php $nome == "Admin" ? "<li><a href='PHP/selecionarProduto.php'>Deletar produto</a></li>": ""; ?>
		<?php $nome == "Admin" ? "": "<li><a href='contato.php'>Contato</a></li>"; ?>
		<?php $nome == "Logar" ? "<li><a href='cadastro.php'>Cadastrar</a></li>": ""; ?>
		<?php if ($nome != "Admin") : ?>
		<form id="busca">
			<?php //require 'pesquisa.php'; ?>
		</form>
		<?php endif; ?>
		<li id="user"><?php $nome == "Logar" ? "<a href='login/index.visao.php'>Logar</a><!--" : "<a href='login/edit.visao.php'>$nome</a>"; ?>
			<ul id="sub">
				<?php $nome == "Admin" ? "" : "<li><a href='login/edit.visao.php'>Editar</a></li>"; ?>
				<li><a href="PHP/logout.php">Sair</a></li>
			</ul>
			<?php $nome == "Logar" ? "-->" : ""; ?>
		</li>
		<?php $nome != "Admin" ? "<a href='produto/carrinho.php'><img id='carrinho' src='publico/img/carrinho.png'></a>": ""; ?>
	</ul>
</body>
</html>