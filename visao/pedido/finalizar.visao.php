<div id="corpoFinalizar">
    <h1 id="tituProdutos">Finalização do Pedido</h1>

    <div id="pedido">
        <h1 class="tituFinalizar">Pedidos</h1>
        <p><?php echo $_SESSION['qtdtotal']  ?> produtos <a href="./produto/carrinho">visualizar produtos</a></p> <br>
        <p>Total a pagar R$ <?php echo $_SESSION['total']  ?></p>
    </div>

    <div id="cupom">
        <h1 class="tituFinalizar">Posui cupom?</h1>
        <form action="./pedido/calcularTotalPedido" method="POST">
            <label for="nomecupom">Digite o nome de seu cupom:</label>
            <input class="form" type="text" name="nomecupom"> 

            <button id="botao" type="submit">Enviar</button>
        </form>
        <p>Total a pagar com desconto R$ <?=$_SESSION['total']?></p>
    </div>

    <div id="formasPagamento">
        <h1 class="tituFinalizar">Formas de Pagamento</h1>
        <table id="tblpagamento">
            <tr>
                <th><img class="pagamento" title="cartão de crédito" src="./publico/img/pagamento1.png"></th>
                <th><img class="pagamento" title="boleto" src="./publico/img/pagamento2.png"></th>
                <th><img class="pagamento" title="na loja" src="./publico/img/pagamento3.png"></th>
                <th><img class="pagamento" title="lotérica" src="./publico/img/pagamento4.png"></th>
            </tr>
            <tr>
                <td class="txtpagamento">Cartão</td>
                <td class="txtpagamento">Boleto</td>
                <td class="txtpagamento">Na Loja</td>
                <td class="txtpagamento">Lotérica</td>
            </tr>
        </table>
    </div>
    
    <div id="fim">
        <a href="./pedido/addPedido/<?=$_SESSION['qtd']?>/<?=$_SESSION['nomeproduto']?>"><h1 id="Pagar">Pagar Compra</h1></a>
    </div>
</div>

