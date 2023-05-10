<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Excluir Administrador </title>
</head>

<body>
    <h2> Excluir Administrador </h2>
    <form method="POST" action="delete-admin.php">
        <label> ID do Administrador: </label>
        <input type="text" name="id">

        <br>
        <button type="submit">Excluir</button>
        <div class="read">
        <a href="read-admin.php"><button type="button"> Listar Administrador</button></a>
    </div>
    </form>
</body>

</html>