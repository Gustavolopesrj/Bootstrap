<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="script.js"></script>
    <style>
        #categorias{
            list-style: none; 
            text-align: left;                       
        }
    </style>
</head>

<body>
    <div class="container-flex">
        <?php
        require_once("connect.php");
        ?>

        <?php
        require('cabecalho.html');
        ?>
        
        <div class="row">
            <nav class="col-2 text-center">
                <h4>Categorias</h4>
                <ul id="categorias">
                    <li onclick="exibir_todos()">Todos (15)</li>
                    <li onclick="exibir_categorias('Ação')">Ação (3)</li>
                    <li onclick="exibir_categorias('Corrida')">Corrida (3)</li>
                    <li onclick="exibir_categorias('Luta')">Luta (3)</li>
                    <li onclick="exibir_categorias('Tiro')">Tiro (3)</li>
                    <li onclick="exibir_categorias('RPG')">RPG (3)</li>
                </ul>
            </nav>

            <div id="produtos" class="col">
                <?php

                $sql = "select * from tbl_produtos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                ?>
                        <br>
                        <div class="subproduto text-center" id="<?php echo $rows["categoria"]; ?>" style="display:block;">
                            <img src="<?php echo $rows["imagem"]; ?>" width="120px" onmousemove="destaque(this)">
                            <h3><?php echo $rows["nome"]; ?> <?php echo $rows["descr"]; ?></h3>
                            <hr>
                            <h3><strike class="text-danger"><?php echo $rows["desconto"]; ?></strike></h3>
                            <h3><?php echo $rows["preco"]; ?></h3>
                            <br>
                        </div>
                <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado - tabela vazia! ";
                }
                ?>
            </div>
        </div>
        <br>
        <?php
        require('rodape.html');
        ?>
    </div>
</body>

</html>