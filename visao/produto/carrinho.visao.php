<?php
error_reporting(0);
ini_set("display_errors", 0);

if ($reg) {
    $_SESSION["feio"][] = $reg;
}
?>
<body>
    <div class="carro">
        <h1>Carrinho</h1>
        <?php
        foreach ($_SESSION["feio"] as $indice => $exibe) :
            $printa = $exibe["img"];
            ?>
            <img src="<?= $printa ?>"> 
            <p><?= $exibe["nomeproduto"] . " " . $exibe["preco"]; ?></p>
            <a href="./produto/tirar/<?=$indice?>">Remover produto</a>
        <?php endforeach; ?>
    </div>
</body>
