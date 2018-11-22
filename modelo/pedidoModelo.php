<?php

function adicionarPedido($qtd, $totalcompra, $nomeproduto){
    
    $idcliente = $_SESSION['idcliente']['idcliente'];
    $data = date('d/m/y');
    
    $comando1 = "INSERT INTO pedido (idpedido, idcliente, data, totalcompra)
                values (null, $idcliente, $data, $totalcompra)";
    mysqli_query(conn(), $comando1);
    
    $sqlIdproduto = "SELECT idproduto FROM produtos WHERE nomeproduto = $nomeproduto";
    $idproduto = mysqli_query(conn(), $sqlIdproduto);
    $comando2 = "INSERT INTO itempedido (iditempedido, idproduto, idpedido, qtdcompra)
                values (null, $idproduto, null, $qtd)";
    mysqli_query(conn(), $comando2);
}

function pegarValorcupomPorNomecupom($nomecupom){
    $comando = "SELECT valorcupom FROM cupom WHERE nomecupom = $nomecupom";
    $retorno = mysqli_query(conn(), $comando);
    return ($retorno);
}

function adicionarCupom($nomecupom, $valorcupom){
    $comando = "INSERT INTO cupom (nomecupom, valorcupom)
               values ('$nomecupom', $valorcupom)";
    mysqli_query(conn(), $comando);
}