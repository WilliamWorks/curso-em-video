<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/style.css">
    <title>MyNetflix</title>
</head>
<body>
    <header>
        <?php
            include "header.php";
        ?>
    </header>
    <main>
        <div class="container">
            <h2>Banco de Dados</h2>
            <table>
                <tr class="Titulo">
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Foto</td>
                    <td>Data</td>
                </tr>
            <?php
                
                include 'Banco-de-Dados.php';
    
                if (isset($_GET['pesquisa'])){

                foreach($netflix as $filme){
                    if ($_GET['pesquisa'] == $filme['nome']) {
            ?>
                <tr>
                    <td> <?php echo $filme['id'] ?> </td>
                    <td> <?php echo $filme['nome'] ?> </td>
                    <td> <?php echo $filme['foto'] ?> </td>
                    <td> <?php echo converterData($filme) ?> </td>
                    <td> 
                        <form action="resultado.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                            <input type="hidden" name="nome" value="<?php echo $filme['nome'] ?>">
                            <input type="hidden" name="foto" value="<?php echo $filme['foto'] ?>">
                            <input type="hidden" name="data" value="<?php echo converterData($filme) ?>">
                            <input type="hidden" name="genero" value="<?php echo $filme['Genero'] ?>">
                            <input type="hidden" name="diretores" value="<?php echo $filme['Diretores'] ?>">
                            <input type="hidden" name="roteiristas" value="<?php echo $filme['Roteiristas'] ?>">
                            <input type="hidden" name="bilheteria" value="<?php echo $filme['Bilheteria'] ?>">
                            <input type="hidden" name="orcamento" value="<?php echo $filme['Orcamento'] ?>">
                            <button>ver mais</button>
                        </form>
                    </td>
                </tr>  
    
            <?php
                    }  
                }
            }   else {
                foreach($netflix as $filme){
            ?>

                <tr>
                    <td> <?php echo $filme['id'] ?> </td>
                    <td> <?php echo $filme['nome'] ?> </td>
                    <td> <?php echo $filme['foto'] ?> </td>
                    <td> <?php echo converterData($filme) ?> </td>
                    <td> 
                        <form action="resultado.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                            <input type="hidden" name="nome" value="<?php echo $filme['nome'] ?>">
                            <input type="hidden" name="foto" value="<?php echo $filme['foto'] ?>">
                            <input type="hidden" name="data" value="<?php echo converterData($filme) ?>">
                            <input type="hidden" name="genero" value="<?php echo $filme['Genero'] ?>">
                            <input type="hidden" name="diretores" value="<?php echo $filme['Diretores'] ?>">
                            <input type="hidden" name="roteiristas" value="<?php echo $filme['Roteiristas'] ?>">
                            <input type="hidden" name="bilheteria" value="<?php echo $filme['Bilheteria'] ?>">
                            <input type="hidden" name="orcamento" value="<?php echo $filme['Orcamento'] ?>">
                            <button>ver mais</button>
                        </form>
                    </td>
                </tr>
            <?php 
                }
            }
            ?>
            </table>
        </div>
    </main>
    <footer>
        <h6>© 2023 William Souza, Jõao Lucas Inc.</h6>
    </footer>
</body>
<?php
    function converterData($row){
        $d = $row['data'];
        return "$d[-2]$d[-1]/$d[-5]$d[-4]/$d[0]$d[1]$d[2]$d[3]";
    }
?>

</html>