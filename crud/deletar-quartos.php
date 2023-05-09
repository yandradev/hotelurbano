<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Excluir Quarto </title>
</head>

<body>
    <h2> Excluir Quarto </h2>
    <form method="POST" action="delete.php">
        <label> ID do Quarto: </label>
        <input type="text" name="id">

        <br>
        <button type="submit">Excluir</button>
        <div class="read">
        <a href="read.php"><button type="button"> Listar quartos</button></a>
    </div>
    </form>
</body>

</html>