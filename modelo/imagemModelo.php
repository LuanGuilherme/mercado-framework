<?php  
function selecionarImagem ($idimg) {
	$comando2 = "SELECT * FROM imagens WHERE idimg = $idimg";
	$retorno2 = mysqli_query(conexao(), $comando2);
	$registro2 = mysqli_fetch_assoc($retorno2);
	return ($registro2);
}

function todasImagens () {
	$comando2 = "SELECT * FROM imagens";
	$retorno2 = mysqli_query(conexao(), $comando2);
	$registro2 = mysqli_fetch_assoc($retorno2);
	return ($registro2);
}
?>