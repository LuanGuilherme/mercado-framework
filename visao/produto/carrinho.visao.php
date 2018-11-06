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
            $printa = $exibe["img"];?>
        <table>
            <tr>
                <th>Remover do carrinho</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
            <tr> 
                <img src="<?= $printa ?>"><td><a href="./produto/tirar/<?=$indice?>">Remover produto</a></td>
                <td><?= $exibe["nomeproduto"]; ?></td>
                <td><form method="POST"><input value="<?= $exibe['qtd'] ?>" type="nuber" name="qtd"></input></form></td>
                <td>R$: <?= $exibe["preco"]; ?></td>
            </tr>
        </table>
        
        <?php endforeach; ?>
        
        <table id="total">
            <tr>
                <th>Total</th>
            </tr>
            <tr>
                <td>R$ <?= $_SESSION['total'] ?></td>
            </tr>
        </table>
        <a href="./pedido/addPedido/<?=$exibe['nomeproduto']?>/<?=$exibe['qtd']?>/<?=$exibe['preco']?>">Finalizar Pedido</a>
    </div>
</body>
