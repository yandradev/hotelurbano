<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-sistema.css">
    <title> Administração Hotel Urbano </title>
</head>

<body>

    <section></section>
    <div class="img-1">
        <img src="http://localhost/hotelurbano/administrador/img/logourbano.png">
    </div>
    <h2> Cadastrar Quarto </h2>
    
        <div class="container">
            <fieldset>
            <form method="POST" action="create.php" enctype="multipart/form-data">

                <input type="text" name="ocup" class="input-1" placeholder="Ocupação máxima: ">
              <br>
                <input type="text" name="desc" class="input-1" placeholder=" Descrição: ">
<br>
                <input type="text" name="tipo" class="input-1" placeholder="Tipo do quarto:">
<br>
                <input type="text" name="val_cafe" class="input-1" placeholder="Valor Café da Manhã:">
             <br>
             <input type="text" name="val_meia" class="input-1" placeholder="Valor Meia Pensão:">
             <br>
             <input type="text" name="val_completa"" class="input-1" placeholder="Valor Pensão Completa:">
             <br>
                <button type="submit" class="button-cadastro" >Cadastrar</button>
            </form>
    </fieldset>
    <div class="options">
        <div class="listar">
            <a href="read.php"><button class="green-1"> Listar quartos</button></a>

            <div class="atualizar">
                <a href="atualizar-quartos.php"><button class="orange-1">Atualizar quartos</button></a>
            </div>

            <div class="delete">
                <a href="deletar-quartos.php"><button class="blue-1"> Deletar quarto</button></a>
            </div>
        </div>
    </div>
  <div class="title">
    <h2> Cadastrar Administrador </h2>
  </div>
        <br>
        <div class="container-1">
            <fieldset class="fieldset-adm">
            <form method="POST" action="create-admin.php">
                <input type="text" name="email" placeholder="Email:" class="input-1">
                <br>
             <div class="input-box">
                <input type="password" id="senha" name="senha" class="input-1" placeholder="Senha:" maxlength="8">
                <button type="submit" class="button-cadastro">Cadastrar</button>
           
            </form>
            <br>
    </fieldset>
    <div class="listar">
        <a href="read-admin.php"><button class="green-2">Listar administradores</button></a>
    </div>
    <div class="atualizar">
        <a href="atualizar-admin.php"><button class="orange-2">Atualizar administradores</button></a>
    </div>
    <div class="delete">
        <a href="deletar-admin.php"><button class="blue-2">Deletar administrador</button></a>
    </div>
</div>
            <div class="container-0">
                <fieldset class="fieldset-cliente">
              <img src="./img/cliente.png">
                <br>
        </fieldset>
        <div class="listar">
            <a href="read-cliente.php"><button class="green-2"> Listar clientes</button></a>
        </div>
      <div class="listar-reservas">
            <a href="read-reservas.php"><button class="orange-2"> Listar reservas</button></a>
        </div>
      
    
      <script src="script.js"></script>
    </div>

    </body>

</html>