<h1>Vendas entre intervalo de datas</h1>
<br>
    <table>
        <tr>
            <th>Id do Pedido</th>
           <th>Data</th>
            <th>Total compra</th>
            <th>Quantidade de produtos comprados</th>
        </tr>
<?php
    foreach ($produtos as $dado) { 
        echo "<tr>";
        echo "<td>".$dado['idpedido']."</td>";
        echo "<td>".$dado['data']."</td>";
        echo "<td>".$dado['totalcompra']."</td>";
        echo "<td>".$dado['qtdcompra']."</td>";
        echo "</tr>";
    }
?>
    </table> 

