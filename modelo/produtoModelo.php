<?php 

function deletarProduto ($nomeproduto) {
	$comando = "SELECT * FROM produtos WHERE nomeproduto = '$nomeproduto'";
	$retorno = mysqli_query(conexao(), $comando);

	$registro = mysqli_fetch_assoc($retorno);
	$idproduto = $registro["idproduto"];

	$comando = "DELETE FROM produtos WHERE idproduto = $idproduto";

	mysqli_query(conexao(), $comando); 
}

function adicionarProduto ($nomeproduto, $preco, $quantidade, $descproduto, $idimg) {
	$comando = "INSERT INTO produtos (idproduto, nomeproduto, preco, quantidade, descproduto, idimg)
		values (null, '$nomeproduto', '$preco', '$quantidade', '$descproduto', '$idimg')";

	mysqli_query(conexao(), $comando);
}

function alterarProduto ($nomeproduto, $preco, $quantidade, $descproduto, $idimg, $idproduto) {
		$comando = "UPDATE produtos
		SET nomeproduto= '$nomeproduto',preco= '$preco',quantidade= '$quantidade',descproduto= '$descproduto',idimg= '$idimg'
		WHERE idproduto= '$idproduto'";
		$retorno = mysqli_query(conexao(), $comando);	
} 

function selecionarProduto () {
	$comando = "SELECT * FROM produtos";
	$retorno = mysqli_query(conn(), $comando);
	$produtos = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
		$produtos[] = $registro;
	}
	return ($produtos);
}


function selecianorProdutoPorId ($nomeproduto) {
	$comando = "SELECT idproduto FROM produtos WHERE nomeproduto = '$nomeproduto'";
	$idproduto = (int) mysqli_fetch_assoc(mysqli_query(conexao(), $comando));
			
	$comando2 = "SELECT * FROM produtos WHERE idproduto = $idproduto";
	$retorno = mysqli_query(conexao(), $comando2);
	$registro = mysqli_fetch_assoc($retorno);
	return ($registro);
}
?>