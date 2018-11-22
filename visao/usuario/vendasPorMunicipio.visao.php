<h1>Vendas por Município</h1>
<table>
        <tr>
            <th>Id do Pedido</th>
           <th>Data</th>
            <th>Total compra</th>
            <th>Quantidade de produtos comprados</th>
            <th>Cliente</th>
            <th>Cidade</th>
        </tr>
<?php
    foreach ($produtos as $dado) { 
        echo "<tr>";
        echo "<td>".$dado['idpedido']."</td>";
        echo "<td>".$dado['data']."</td>";
        echo "<td>".$dado['totalcompra']."</td>";
        echo "<td>".$dado['qtdcompra']."</td>";
        echo "<td>".$dado['nomecliente']."</td>";
        echo "<td>".$dado['cidade']."</td>";
        echo "</tr>";
    }
?>
    </table>