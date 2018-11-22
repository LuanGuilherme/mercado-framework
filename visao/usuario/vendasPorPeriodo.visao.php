    <table>
        <tr>
            <th>Faturamento</th>
        </tr>
<?php
    foreach ($produtos as $dado) { 
        echo "<tr>";
        echo "<td>".$dado['Faturamento']."</td>";
        echo "</tr>";
    }
?>
    </table>