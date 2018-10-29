<body>
    <?php if ($_SESSION["condicional"] <> 1) : ?>
        <div class="edit">
            <h1>Alterar Produto</h1>
            <form method="POST">
                Digite o nome do produto a ser alterado: <input class="alterar" type="text" name="nome"> <br>
                <input type="submit" id="botao" name="Enviar">
            </form>
        </div>
    <?php endif; ?>

    <?php if ($_SESSION["condicional"] == 1) : ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="idproduto" 
                   value="<?php echo $registro["idproduto"]; ?>">


            Nome do produto: <input type="text" name="nomeproduto" 
                                    value="<?php echo $registro["nomeproduto"]; ?>"> <br>
            <br>
            Preço: <input type="text" name="preco" 
                          value="<?php echo $registro["preco"]; ?>"> <br>
            <br>
            Quantidade: <input type="text" name="quantidade" 
                               value="<?php echo $registro["quantidade"]; ?>"> <br>
            <br>		
            Descrição: <input type="text" name="descproduto" 
                              value="<?php echo $registro["descproduto"]; ?>"> <br>
            <br>
            <label for="Categoria" required="required">Categoria</label>
            <select name="Categoria">
                <option value="3">Bebidas</option>
                <option value="1">Frutas</option>
                <option value="4">Doces</option>
                <option value="2">Produtos de limpeza</option>
            </select>
            <br>        
            Imagem: <input class="form" type="file" name="img"> <br>
            <br>	
            <button type="submit">Enviar</button>
        </form>
    <?php endif; ?>
</body>
