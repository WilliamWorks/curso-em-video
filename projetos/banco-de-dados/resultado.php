<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>resultado</title>
        <link rel="stylesheet" href="estilo/style-resultado.css">
    </head>
    <body>
        <header>
            <?php
                include "header.php";
            ?>
        </header>
        <main>
            <div class="container">
                <div class="for-img">
                    <img src="<?php echo $_POST['foto'] ?>" alt="">
                </div>
                <div class="for-dados">
                    <div id="title">
                        <?php echo "<span>" . $_POST['id'] . " - " . $_POST['nome'] . "</span>"; ?>
                    </div>
                    <div id="dados">
                        <?php
                            echo "<span>" . "Data de Lançamento:            " . $_POST['data'] . "</span>";
                            echo "<span>" . "Gênero:            " . $_POST['genero'] . "</span>";
                            echo "<span>" . "Diretores: " . $_POST['diretores'] . "</span>";
                            echo "<span>" . "Roteiristas: " . $_POST['roteiristas'] . "</span>";
                            echo "<span>" . "Bilheteria: " . $_POST['bilheteria'] . "</span>";
                            echo "<span>" . "Orçamento: " . $_POST['orcamento'] . "</span>";
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <h6>© 2023 William Souza, Jõao Lucas Inc.</h6>
        </footer>
    </body>
</html>