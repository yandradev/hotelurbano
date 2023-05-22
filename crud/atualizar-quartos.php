<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar quartos</title>
</head>

<body>
    <section></section>
  <div class="title-1">
    <h2>Atualizar quarto</h2>
  </div>
    <div class="container">
        <fieldset class="fieldset">
    <form method="POST" action="update.php">
     
        <input type="text" name="id" placeholder="ID do quarto:">
        <br>
     
        <input type="text" name="ocup" placeholder="Ocupação máxima:">
        <br>
       
        <input type="text" name="desc" placeholder="Descrição:">
        <br>

        <input type="text" name="tipo" placeholder="Tipo do quarto:">
        <br>
     
        <input type="text" name="val_cafe" placeholder="Valor Café da Manhã:">
        <br>
        <input type="text" name="val_meia" placeholder="Valor Meia Pensão:">
        <br>
        <input type="text" name="val_completa" placeholder="Valor Pensão Completa:">
        <br>
    </fieldset>
        <div class="listar">
            <button type="submit">Atualizar</button>
        </div>
        <div class="read">
            <a href="./read.php"><button type="button"> Listar quartos</button></a>
        </div>
    </form>
</body>

</html>