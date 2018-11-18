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
                <?= @$_SESSION["adm"] == "Admin" ? "<li><a href='./cliente/admin'>Admin</a></li>": ""; ?>
		<?= @$_SESSION["adm"] == "Admin" ? "<li><a href='./produto/addProduto'>Adicionar produto</a></li>": ""; ?>
		<?= @$_SESSION["adm"] == "Admin" ? "<li><a href='./produto/updateProduto'>Alterar produto</a></li>": ""; ?>
		<?= @$_SESSION["adm"] == "Admin" ? "<li><a href='./produto/deleteProduto'>Deletar produto</a></li>": ""; ?>
		<?= @$_SESSION["adm"] == "Admin" ? "": "<li><a href='./produto/contato'>Contato</a></li>"; ?>
		<?= empty(@$_SESSION["idcliente"]["nomecliente"] or @$_SESSION["adm"]) ? "<li><a href='./cliente/addCliente'>Cadastrar</a></li>": ""; ?>
		<?php if (@!$_SESSION["adm"]) : ?>
			<form id="busca" method="POST" action="./produto/busca/">
				<input class="pesquisa" type="text" name="busca" placeholder=" Pesquisa">
			</form>
		<?php endif; 
		$nome = @$_SESSION["idcliente"]['nomecliente'];
		$id = @$_SESSION["idcliente"]['idcliente'];
		?>
		<li id="user"><?= empty(@$_SESSION["idcliente"]["nomecliente"]) ? "<a href='./cliente/entrar'>Logar</a><!--" : "<a href='./cliente/editar'>$nome</a>"; ?>
			<ul id="sub">
				<?= @!isset($_SESSION["adm"]) ? "" : "<li><a href='./cliente/editar/$id'>Editar</a></li>"; ?>
				<?= @isset($_SESSION["adm"]) ? "" : "<li><a href='./cliente/removerCliente/$id'>Apagar conta</a></li>"; ?>
				<li><a href="./cliente/logout">Sair</a></li>
			</ul>
			<?= empty(@$_SESSION["idcliente"]["nomecliente"]) ? "-->" : ""; ?>
		</li>
		<?= @$_SESSION["idcliente"]["nomecliente"] != "Admin" ? "<a href='./produto/carrinho'><img id='carrinho' src='publico/img/carrinho.png'></a>": ""; ?>
	</ul>
</body>
</html>