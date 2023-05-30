<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style-perfil.css">
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
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" value="<?php echo $row["nome_completo"]; ?>" id="nome">
            <br> 
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" value="<?php echo $row["cpf"]; ?>" id="cpf">
              <br>
                <label for="email">Email:</label>
                <input type="text" name="email" value="<?php echo $row["email"]; ?>" id="email">
              <br>
                <label for="senha">Senha:</label>
                <input type="text" name="senha" value="<?php echo $row["senha"]; ?>" id="senha">
             <br>
             <div class="title">
                    <p>Endereço:</p>
                </div>
                <br>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" value="<?php echo $row["cidade"]; ?>" id="cidade">
                <br>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $row["bairro"]; ?>" id="bairro">
                <br>
                <label for="cep">CEP:</label>
                <input type="text" name="cep" value="<?php echo $row["cep"]; ?>" id="cep">
                <br>
                <label for="rua">Rua:</label>
                <input type="text" name="rua" value="<?php echo $row["rua"]; ?>" id="rua">
                <br>
                <label for="numero">Número da casa:</label>
                <input type="text" name="numero" value="<?php echo $row["numero_casa"]; ?>" id="numero">
                <br>

            </fieldset>
         <br>
            <div class="button-alter">
<button type="submit">Salvar alterações</button>
</div>
          <?php             }
                    } else {
                        echo "<p>Impossível realizar ação.</p>";
                    }
                   
?>

        </form>
    </div>

</html>