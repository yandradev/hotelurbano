<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar quartos</title>
</head>

<body>
    <h2>Atualizar quarto</h2>
    <form method="POST" action="update.php">
        <label>ID do quarto:</label>
        <input type="text" name="id">
        <br>
        <label>Ocupação máxima:</label>
        <input type="text" name="ocup">
        <br>
        <label>Descrição:</label>
        <input type="text" name="desc">
        <br>
        <label>Tipo do quarto:</label>
        <input type="text" name="tipo">
        <br>
        <label>Valor:</label>
        <input type="text" name="val">
        <br>
        <div class="listar">
            <button type="submit">Atualizar</button>
        </div>
        <div class="read">
            <a href="./read.php"><button type="button"> Listar quartos</button></a>
        </div>
    </form>
</body>

</html>