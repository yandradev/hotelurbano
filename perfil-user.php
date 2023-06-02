<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/hotelurbano/style-perfil.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Perfil</title>
</head>

<body>
    <section></section>
    <div class="form-image">
        <img src="http://localhost/hotelurbano/homepage/img-homepage/Fundo%20Branco.png">
    </div>
    <div class="container">

        <form action="update-user.php" method="POST" id="form">
            <?php
                    require_once 'conexao.php';
                        
                    session_start();
                    if (isset($_COOKIE['id_cliente'])) {
                        $id_cliente = $_COOKIE['id_cliente'];
                   
                    } else {
                        header("Location: login.php");
                        exit();
                    }
                    
                    
                  
                    $sql = "SELECT * FROM clientes WHERE id_cliente =  $id_cliente";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <fieldset>
                <div class="title">
                    <p>Informações básicas:</p>
                </div>
                <br>
             <div class= "input-box">
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" value="<?php echo $row["nome_completo"]; ?>" id="nome">
                <small></small>
              </div>
              <div class="input-box">  
                <br> 
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" value="<?php echo $row["cpf"]; ?>" id="cpf" maxlength="14">
                <small></small>
                <div>
                <br>
               <div class="input-box">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row["email"]; ?>" id="email">
               <small></small>
               </div>
               <br>
              <div class="input-box">
               <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" value="<?php echo $row["senha"]; ?>" maxlength="8">
                <div class="icon-eye">
                            <img src="http://localhost/hotelurbano/entrada/profile/img/eye.png"  id="eye">
                        </div>
                <small></small>
                <br>
          <div>
                <div class="title">
                    <p>Endereço:</p>
                </div>
                <br>
           <div class="input-box">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" value="<?php echo $row["cidade"]; ?>" id="cidade">
                 <small></small>
             <br>
           </div>    
              <div class="input-box">
           <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $row["bairro"]; ?>" id="bairro">
                <small></small>
              </div>
                <br>
             <div class="input-box">
                <label for="cep">CEP:</label>
                <input type="text" name="cep" value="<?php echo $row["cep"]; ?>" id="cep">
               <small></small>
             </div>
               <br>
             <div class="input-box">
               <label for="rua">Rua:</label>
                <input type="text" name="rua" value="<?php echo $row["rua"]; ?>" id="rua">
                 <small></small>
             </div> 
                 <br>
             <div class="input-box">
                 <label for="numero">Número da casa:</label>
                <input type="text" name="numero" value="<?php echo $row["numero_casa"]; ?>" id="numero">
                <small></small>  
                <br>
             </div>
            </fieldset>
         <br>
            <div class="button-alter">
<button type="submit">Salvar alterações</button>
</div>
<div class="button-delete">
<a href="user-deletar.php" style="text-decoration: none;"><button type="button"onclick="validar(); return false;">Deletar conta</button></a>
</div>


          <?php             }
                    } else {
                        echo "<p>Impossível realizar ação.</p>";
                    }
                   
?>
 <script src="http://localhost/hotelurbano/validation/script.js"></script>
        </form>
       
    </div>

</html>