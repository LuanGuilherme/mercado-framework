<?php

function adicionarPedido($qtd, $totalcompra, $nomeproduto){
    $idcliente = $_SESSION['idcliente']['idcliente'];
    $data = date('Y-m-d');
    
    $comando1 = "INSERT INTO pedido (idcliente, data, totalcompra)
                values ($idcliente, '$data', $totalcompra)";
    mysqli_query(conn(), $comando1);
    
    $sqlIdpedido = "SELECT idpedido FROM pedido WHERE idcliente = $idcliente AND totalcompra = $totalcompra";
    $idpedido = mysqli_fetch_assoc(mysqli_query(conn(), $sqlIdpedido));
    $idpe = $idpedido['idpedido'];
    
    $sqlIdproduto = "SELECT idproduto FROM produtos WHERE nomeproduto = '$nomeproduto'";
    $idproduto = mysqli_fetch_assoc(mysqli_query(conn(), $sqlIdproduto));
    $idpo = $idproduto['idproduto'];
    
    $comando2 = "INSERT INTO itempedido (idproduto, idpedido, qtdcompra)
                values ($idpo, $idpe, $qtd)";
    mysqli_query(conn(), $comando2);
}

function pegarValorcupomPorNomecupom($nomecupom){
    $comando = "SELECT valorcupom FROM cupom WHERE nomecupom = '$nomecupom'";
    $retorno = mysqli_fetch_assoc(mysqli_query(conn(), $comando));
    return ($retorno['valorcupom']);
}

function adicionarCupom($nomecupom, $valorcupom){
    $comando = "INSERT INTO cupom (nomecupom, valorcupom)
               values ('$nomecupom', $valorcupom)";
    mysqli_query(conn(), $comando);
    alert("Cupom inserido");
}

function deletarCupom($nomecupom){
    $comando = "DELETE FROM cupom WHERE nomecupom = '$nomecupom'";
    mysqli_query(conn(), $comando);
    alert("Cupom deletado");
}