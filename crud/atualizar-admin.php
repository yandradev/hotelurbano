<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Administrador</title>
</head>

<body>
  <section></section>

  <h2>Atualizar Administrador</h2>
   
  <div class="container">
   <fieldset>
    <form method="POST" action="update-admin.php">

        <input type="text" name="id" placeholder="ID do administrador:">
        <br>
        <input type="text" name="email" placeholder="Email:">
<br>
        <input type="text" name="senha" placeholder="Senha:">
        <br>
    </fieldset>
        <div class="update">
            <button type="submit">Atualizar</button>
        </div>
        <div class="read">
            <a href="./read-admin.php"><button type="button"> Listar administradores</button></a>
        </div>
    </form>
   
</div>
</body>

</html>