<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Administrador</title>
</head>

<body>
    <h2>Atualizar Administrador</h2>
    <form method="POST" action="update-admin.php">
        <label>ID do administrador:</label>
        <input type="text" name="id">
        <br>
        <label>Email:</label>
        <input type="text" name="email">
        <br>
        <label>Senha:</label>
        <input type="text" name="senha">
        <br>
        <div class="update">
            <button type="submit">Atualizar</button>
        </div>
        <div class="read">
            <a href="./read-admin.php"><button type="button"> Listar administradores</button></a>
        </div>
    </form>
</body>

</html>