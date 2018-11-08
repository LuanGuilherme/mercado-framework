<?php

function adicionarPedido($qtd, $totalcompra){
    $idcliente = $_SESSION['idcliente']['idcliente'];
    $data = date('d/m/y');
    
    $comando1 = "INSERT INTO pedido (idpedido, idcliente, data, totalcompra)
                values (null, $idcliente, $data, $totalcompra)";
}

