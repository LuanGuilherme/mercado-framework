<?php  
function selecionarImagem ($idimg) {
	$comando2 = "SELECT img FROM imagens WHERE idimg = '$idimg'";
	$retorno2 = mysqli_query(conn(), $comando2);
	$registro2 = mysqli_fetch_assoc($retorno2);
	return ($registro2["img"]);
}

?>