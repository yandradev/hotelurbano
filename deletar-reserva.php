<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar reserva</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@500&family=Questrial&family=Raleway:wght@200&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        section {
            background: linear-gradient(90deg, rgba(243, 108, 92, 1) 0%, rgba(72, 98, 183, 1) 47%, rgba(76, 187, 163, 1) 94%);
            width: 100%;
            height: 3rem;
        }

        img {
            width: 27rem;
            margin: auto;
            display: block;
            margin-top: -4%;
        }

        .container-1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 30px 0;
        }

        fieldset {
            padding: 20px 20px 20px;
            width: 20rem;
            display: block;
            margin: auto;
            margin-top: -10%;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        input {
            display: block;
            cursor: pointer;
            border: 0;
            border-bottom: 1px solid black;
            width: 100%;
            outline: 0;
            font-size: 15px;
            padding: 3px 0px 0px;
        }

        input:focus {
            border-bottom: 1px solid rgb(212, 28, 7);
        }

        p {
            font-weight: bold;
            text-decoration: underline;
            font-size: 18px;
        }

        .deletar button {
            background: linear-gradient(90deg, rgb(238, 85, 69) 0%, rgb(29, 74, 220) 47%, rgb(11, 189, 150) 94%);
            border-style: none;
            padding: 5px 35px 8px;
            color: white;
            font-family: 'Oswald', sans-serif;
            font-size: 17px;
            border-radius: 20px;
            text-shadow: 1px 1px 1px black;
            display: block;
            margin: auto;
        }
        
    select {
        display: block;
        cursor:pointer;
        border:0;
        border-bottom: 1px solid black;
        width: 100%;
        font-size: 15px;
        padding: 3px 0px 0px;
}
    

    </style>
</head>
<body>
    <section></section>
    <div class="form-image">
        <img src="http://localhost/hotelurbano/homepage/img-homepage/Fundo%20Branco.png">
    </div>
    <?php
  
   require_once 'conexao.php';
   session_start();
    if (isset($_COOKIE['id_cliente'])) {
        $id_cliente = $_COOKIE['id_cliente'];
    } else {
        header("Location: http://localhost/hotelurbano/entrada/login.php");
        exit;
    }
    
    $sql = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="container-1">
                <form action="delete-reserva.php" method="POST" id="form">
                    <fieldset>
                        <div class="title">
                            <p>Deletar reserva:</p>
                        </div>
                        <br>
                        <label for="reserva">ID da reserva:</label>
                      
                        <select name="id_reserva" id="id_reserva" required>
                       
                         <?php
                        
                            $sql = "SELECT id_reserva FROM reservas WHERE id_cliente = $id_cliente";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $id_reserva = $row['id_reserva'];
                                    echo "<option value=''></option>";
                                    echo "<option value='$id_reserva'>$id_reserva</option>";
                                }
                            } else {
                               
                            }
                            ?>
                        </select>
                        <br>
                    
                        <label for="senha">Senha de usuário:</label>
                        <input type="password" name="senha" id="senha" maxlength="8" required>
                        <br>
                    </fieldset>
                    <br>
                    <div class="deletar">
                        <button type="submit">Deletar reserva</button>
                    </div>
                </form>
            </div>
            <?php
        }
    } else {
        echo "<p>Impossível realizar a ação.</p>";
    }
    ?>
</body>
</html>
