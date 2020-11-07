<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nossas lojas</title>
</head>

<body>
    <div class="container-flex">
            <?php
            require_once('cabecalho.html');
            ?>

            <div class="container">
                <section class="row py-5">
                    <div class="col text-center">
                        <h2>Loja 1</h2>
                        <h2>Rio de Janeiro</h2>
                        <h4>Avenida Olegário Maciel, Nº 438</h>
                        <h4>Barra</h4>
                        <h4>(21) 4141-4026</h4><br>
                    </div>
                    <div class="col text-center">
                        <h2>Loja 2</h2>
                        <h2>São Paulo</h2>
                        <h4>Avenida São João, Nº 439</h4>
                        <h4>República</h4>
                        <h4>(11) 3576-9834</h4><br>
                    </div>
                    <div class="col text-center">
                        <h2>Loja 3</h2>
                        <h2>Curitiba</h2>
                        <h4>Rua Conselheiro Laurindo, Nº 809</h4>
                        <h4>Centro</h4>
                        <h4>(41) 2587-3567</h4><br>
                    </div>
                </section>
            </div>
            
            <div class="container">
                <?php
                require_once('rodape.html');
                ?>
            </div>
    </div>
</body>

</html>