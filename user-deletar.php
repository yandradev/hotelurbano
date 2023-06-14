<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style-delete.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar perfil</title>
</head>
<body>
    <section></section>

    <div class="form-image">
        <img src="http://localhost/hotelurbano/homepage/img-homepage/Fundo%20Branco.png">
    </div>
    <div class="container-1">

        <form action="delete.php" method="POST" id="form">
            <?php
                    require_once 'conexao.php';
                        
                    session_start();
                    if (isset($_COOKIE['id_cliente'])) {
                        $id_cliente = $_COOKIE['id_cliente'];
                   
                    } else {
                        header(" http://localhost/hotelurbano/entrada/login.php");
                        exit();
                    }
                    
                    
                  
                    $sql = "SELECT * FROM clientes WHERE id_cliente =  $id_cliente";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
            <fieldset>
                <div class="title">
                    <p>Deletar conta:</p>
                </div>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            <br> 
                <label for="senha">Senha:</label>
                <input type="text" name="senha" id="senha">
              <br>       
    
            </fieldset>
            <br>
            <div class="deletar">
            <button type="submit">Deletar conta</button>
            </div>
            <?php             }
                    } else {
                        echo "<p>Impossível realizar ação.</p>";
                    }              
?>
      </form>
    
</body>
</html>   