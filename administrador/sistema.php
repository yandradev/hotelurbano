<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de quartos </title>
</head>

<body>
    <h2> Cadastrar quarto </h2>
    <form method="POST" action="create.php">
        <label> Ocupação máxima: </label>
        <input type="text" name="ocup">
        <label> Descrição: </label>
        <input type="text" name="desc">
        <label> Tipo do quarto: </label>
        <input type="text" name="tipo">
        <label> Valor: </label>
        <input type="text" name="val">

        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <div class="listar">
        <a href="read.php"><button> Listar quartos</button></a>
    </div>
    <div class="atualizar">
        <a href="atualizar-quartos.php"><button>Atualizar quartos</button></a>
    </div>
    <div class="delete">
        <a href="deletar-quartos.php"><button> Deletar quarto</button></a>
    </div>


</body>

</html>