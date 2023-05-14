<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Excluir Administrador </title>
</head>

<body>
    <section></section>
   <div class="title-2">
    <h2> Excluir Administrador </h2>
   </div>
    <div class="container">
        <fieldset>
    <form method="POST" action="delete-admin.php">

        <input type="text" name="id" placeholder="ID do Administrador: ">

        <br>
    </fieldset>
      <div class="delete">
        <button type="submit" >Excluir</button>
      </div>
    
        <div class="read">
        <a href="read-admin.php"><button type="button"> Listar Administrador</button></a>
    </div>
    </form>
</body>

</html>