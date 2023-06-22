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
<style>
.icon-eye {
    margin-top: -13%;
    margin-left: 85%;
    cursor: pointer;
     
}


</style>
    <section></section>
    <div class="img-1">
        <img src="http://localhost/hotelurbano/administrador/img/logourbano.png">
    </div>
    <h2> Cadastrar Quarto </h2>
    
        <div class="container">
            <fieldset>
            <form method="POST" action="create.php" enctype="multipart/form-data" >

                <input type="text" name="ocup" class="input-1" placeholder="Ocupação máxima: " required>
              <br>
                  <input type="file" name="imagem" style="width: 92%; padding: 10px 10px 12px" class="custom-file-input">
                  <br>
                <input type="text" name="desc" class="input-1" placeholder=" Descrição: " required>
<br>
                <input type="text" name="tipo" class="input-1" placeholder="Tipo do quarto:" required>
<br>
                <input type="text" name="val_cafe" class="input-1" placeholder="Valor Café da Manhã:" required>
             <br>
             <input type="text" name="val_meia" class="input-1" placeholder="Valor Meia Pensão:" required>
             <br>
             <input type="text" name="val_completa"" class="input-1" placeholder="Valor Pensão Completa:" required>
             <br>
             <input type="text" name="limite_reservas" class="input-1" placeholder="Limite de reservas" required>
             
                <button type="submit" class="button-cadastro" style="margin-left: 13%;">Cadastrar</button>
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
  <div class="title">
    <h2> Reservas </h2>
  </div>
        <br>
        <div class="container-1">
            <fieldset class="fieldset-adm" style="  padding: 25px 25px 16px;">
      <span>Em caso de solicitação direta do cliente.</span>
             
      <form method="POST" action="create-reserva.php">
             <br>
<div class="img-form">

    <img src="http://localhost/hotelurbano/crud/img/Hotel%20Urbano.png">
</div>
                
           
          <a href="http://localhost/hotelurbano/crud/receber-id.php"> <button type="button" class="button-cadastro">Cadastrar reserva</button></a>  
             
            </form>
            <br>
    </fieldset>
    <div class="listar">
        <a href="http://localhost/hotelurbano/crud/read-reservas.php"><button class="green-2">Listar reservas</button></a>
    </div>
    <div class="atualizar">
        <a href="atualizar-reservas.php"><button class="orange-2">Atualizar reservas</button></a>
    </div>
    <div class="delete">
        <a href="deletar-reservas.php"><button class="blue-2">Deletar reservas</button></a>
    </div>


</div>
         

<div class="container-0">
                <fieldset class="fieldset-cliente" style=" width: 15rem;">
              <img src="./img/cliente.png">
                <br>
        </fieldset>
        <div class="cadastrar-cliente">
            <a href="http://localhost/hotelurbano/entrada/cadastro.php"><button class="green-3" > Cadastrar cliente </button></a>
        </div>
        <div class="atualizar-cliente">
            <a href="http://localhost/hotelurbano/crud/atualizar-cliente.php"><button class="orange-3" > Atualizar cliente </button></a>
        </div>
      <div class="listar-clientes">
            <a href="read-cliente.php"><button class="blue-3" > Listar clientes</button></a>
        </div>
      <br>

</div>
<div class="container-3">
  <div class="title-4">
    <h2 style="margin-top: -9%; font-size: 26px; width: 20rem; position: absolute; left: 62%;" > Cadastrar Administrador </h2>
  </div>
  <fieldset class="fieldset-adm-1" style=" width: 5%; padding: 30px 29px 5px;" >
<form action="create-admin.php" method="POST">
    <input type="text" name="email" class="input-1" placeholder="Email:" style="width: 16rem;" required>
    <br>
    <div class="input-senha">
    <input type="password" id="senha" name="senha" class="input-1" placeholder=" Senha: "  style="width: 16rem;" required>
  
 
  </div>
<button type="submit" class="button-cadastro" style="margin-left: 7.6%;">Cadastrar</button></a>  
</form>
</fieldset>
<div class="listar-administrador">
<a href="read-admin.php"><button class="green-4" > Listar administradores </button></a>
</div>
<div class="atualizar-administrador">
<a href="atualizar-admin.php"><button class="orange-4" > Atualizar administradores </button></a>
</div>
<div class="deletar-administrador">
<a href="deletar-admin.php"><button class="blue-4" > Deletar administrador</button></a>
</div>
</div>
    
      <script src="script.js"></script>
  


  


    </body>

</html>