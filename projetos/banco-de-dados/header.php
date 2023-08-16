<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilo/header-style.css">
</head>
<body>
    <header>
        <div class="header-tile">
            <a href="principal.php"> 
                <h1>MyNetflix</h1>
            </a>
        </div>
        <div class="header-for-form">
            <form action="./principal.php" method="GET">
                <input type="text" name="pesquisa" placeholder="Digite sua Pesquisa" required>
                <button type="submit">Pesquisar</button>
            </form>
        </div>
    </header>
</body>
</html>