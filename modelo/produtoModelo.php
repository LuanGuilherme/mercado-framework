<?php 

function deletarProduto ($nomeproduto) {
	$comando = "SELECT * FROM produtos WHERE nomeproduto = '$nomeproduto'";
	$retorno = mysqli_query(conn(), $comando);

	$registro = mysqli_fetch_assoc($retorno);
	$idproduto = $registro["idproduto"];

	$comando = "DELETE FROM produtos WHERE idproduto = $idproduto";

	mysqli_query(conn(), $comando); 
}

function adicionarProduto ($nomeproduto, $preco, $quantidade, $descproduto, $img, $idcategoria) {
        $comando1 = "INSERT INTO imagens (idimg, img)
                values (null, '$img')";
        mysqli_query(conn(), $comando1);
        $pegarIdimg = "SELECT idimg FROM imagens WHERE img = '$img'";
        $retorno = mysqli_fetch_assoc(mysqli_query(conn(), $pegarIdimg));
        $idimg = $retorno["idimg"];
     
	$comando2 = "INSERT INTO produtos (idproduto, nomeproduto, preco, quantidade, descproduto, idimg, idcategoria)
		values (null, '$nomeproduto', '$preco', '$quantidade', '$descproduto', '$idimg', '$idcategoria')";
	mysqli_query(conn(), $comando2);
}

function alterarProduto($nomeproduto, $preco, $quantidade, $descproduto, $img, $idproduto, $idcategoria) {
    $comando1 = "INSERT INTO imagens (idimg, img)
                values (null, '$img')";
    mysqli_query(conn(), $comando1);
    $pegarIdimg = "SELECT idimg FROM imagens WHERE img = '$img'";
    $retorno1 = mysqli_fetch_assoc(mysqli_query(conn(), $pegarIdimg));
    $idimg = $retorno1["idimg"];
    
    $comando2 = "UPDATE produtos
		SET nomeproduto= '$nomeproduto',preco= '$preco',quantidade= '$quantidade',descproduto= '$descproduto',idimg= '$idimg', idcategoria= '$idcategoria'
		WHERE idproduto= '$idproduto'";
    $retorno2 = mysqli_query(conn(), $comando2);
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


function selecionarProdutoPorId ($nomeproduto) {
	$comando = "SELECT idproduto FROM produtos WHERE nomeproduto LIKE '$nomeproduto%'";
	$idproduto = mysqli_fetch_assoc(mysqli_query(conn(), $comando));
	$idproduto = $idproduto["idproduto"];
	$comando2 = "SELECT * FROM produtos WHERE idproduto = '$idproduto'";
	$retorno = mysqli_query(conn(), $comando2);
	$registro = mysqli_fetch_assoc($retorno);
	return ($registro);
}

function contarProdutos () {
	$sql = mysqli_query(conn(),"SELECT count(idproduto) FROM produtos");
	$qtd = mysqli_fetch_assoc($sql);
	return($qtd["count(idproduto)"]);
}

function pesquisa ($nome) {
	$sql = "SELECT * FROM produtos WHERE nomeproduto LIKE '$nome%'"; 
 	$consulta = mysqli_query(conn(), $sql);
 	$array = mysqli_fetch_assoc($consulta);
 	return($array["nomeproduto"]);
}
?>