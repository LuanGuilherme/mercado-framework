<?php
error_reporting(0);
ini_set(“display_errors ”, 0);
if (!isset($_SESSION["cont"])) {
    $_SESSION["cont"] = 0;
    $cont = $_SESSION["cont"];
} else {
    $_SESSION["cont"] += 1;
    $cont = $_SESSION["cont"];
}

if ($reg) {
    $_SESSION["feio"][$cont] = $reg;
}
?>
<body>
    <div class="carro">
        <h1>Carrinho</h1>
        <?php
        foreach ($_SESSION["feio"] as $exibe) :
            $printa = $exibe["img"];
            ?>
            <img src="<?= $printa ?>"> 
            <p><?= $exibe["nomeproduto"] . " " . $exibe["preco"]; ?></p>
        <?php endforeach; ?>
        <a href="./produto/produto/tirar/?>">Esvaziar carrinho</a>
    </div>
</body>
