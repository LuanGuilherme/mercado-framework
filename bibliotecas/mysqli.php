<?php

function conn() {
    $text = fopen("D:/wamp64/www/Framework-noopMVC/bibliotecas/dados.txt", "r");
    
    while (!feof($text)) {
        $dados[] = trim(fgets($text));
    }
    fclose($text);
    
    $cnx = mysqli_connect($dados[0], $dados[1], $dados[2], $dados[3]);
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}