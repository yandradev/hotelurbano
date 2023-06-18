<!DOCTYPE html>
<html>
<head>
    <title>Reservas</title>
    <meta charset="utf-8">

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Raleway:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@500&family=Questrial&family=Raleway:wght@200&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        overflow:scroll;
    }

    section {
        width: 100%;
        height: 5vh;
        background: linear-gradient(90deg, rgba(243, 108, 92, 1) 0%, rgba(72, 98, 183, 1) 47%, rgba(76, 187, 163, 1) 94%);
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 12px;
        text-align: center;
    }

    th {
        background: linear-gradient(90deg, rgba(243, 108, 92, 1) 0%, rgba(72, 98, 183, 1) 47%, rgba(76, 187, 163, 1) 94%);
        color: black;
        font-weight:bolder;
        text-transform: uppercase;
        color: white;
        font-family: 'Oswald', sans-serif;
        font-size: 17px;
        text-shadow: 2px 2px 2px black;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .title h2 {
        font-family: 'DM Serif Display', serif;
        margin-top: 1%;
        text-align: center;
        font-size: 25px;
        color: rgb(12, 240, 190);
        text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0, 0, 0, 0.15);
        color: black;
    }

    table {
        border-radius: 10px;
    }

    .container {
        display: flex;
        justify-content: center;
        margin-top: 7%;
    }

    img {
        display: block;
        margin: auto;
        width: 5rem;
    }

    hr {
        border-style: ridge;
    }

    p {
        font-size: 20px;
        margin-top: -3%;
        text-transform: uppercase;
    }

    .alerta {
        text-align: center;
    }

    .investimento {
        text-align: center;
        position: absolute;
        margin-top: -5%;
        font-weight: bold;

    }

  

    .investimento span {
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    text-shadow: 2px 2px 0px #eee9e9, 5px 4px 0px rgba(0, 0, 0, 0.15);
    color: black;
        
    }


button , .delete-reserva input[type=submit] {
    background: linear-gradient(90deg, rgb(238, 85, 69) 0%, rgb(29, 74, 220) 47%, rgb(11, 189, 150) 94%);
    border-style: none;
    padding: 6px 35px 8px;
    color: white;
    font-family: 'Oswald', sans-serif;
    font-size: 17px;
    border-radius: 30px;
    text-shadow: 1px 1px 1px black;
    margin-top: 12rem;
   
}
.comprovante a{
 
 margin-top: -25%;
 left: 72rem;
 position: absolute;
 font-size: 22px;
text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15);
color: black;
font-family:  'Oswald', sans-serif;


   
  
}

li {
    list-style: none;
}
a {
  text-decoration: none;
}



.delete-reserva {
 margin-top: -12%;
 display: inline-block;
 position: absolute;
 left: 50%;


} 

.atualizar-reserva  {
    margin-top: -13.4%;
 display: inline-block;
 position: absolute;
 left: 33%;

}
.delete-reserva input[type=submit]   {
    padding: 5px 40px 9px;
}

.atualizar-button  {
    padding: 5px 55px 9px;
}
</style>
</head>

<body>
<?php
require_once("conexao.php");
session_start();

if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
} else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit;
}

$sql_reservas = "SELECT id_reserva, data_entrada, data_saida, quantidade_ocupantes, valor_total, forma_de_pagamento FROM reservas WHERE id_cliente = $id_cliente";
$resultado_reservas = mysqli_query($conn, $sql_reservas);

$sql_cliente = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$resultado_cliente = $conn->query($sql_cliente);

if ($resultado_cliente && $resultado_cliente->num_rows > 0) {
    $row_cliente = $resultado_cliente->fetch_assoc();
    ?>
    <section></section>
    <img src="http://localhost/hotelurbano/homepage/img-homepage/logourbano.png">
    <div class="title">
        <h2>Bem-vindo(a) às suas reservas, <?php echo $row_cliente["nome_completo"]; ?>!</h2>
    </div>
    <div class="container">
    <?php if (mysqli_num_rows($resultado_reservas) > 0) {
        $total_investido = 0;
        ?>
        <table border="1">
            <tr>
                <th>Número da reserva</th>
                <th>Data de entrada</th>
                <th>Data de saída</th>
                <th>Valor</th>
                <th>Ocupantes</th>
                <th>Forma de pagamento efetuada</th>
            </tr>
          
            <?php while ($dados_reserva = mysqli_fetch_assoc($resultado_reservas)) {
            $total_investido += $dados_reserva["valor_total"];
            ?>
                <tr>
                    <td><?php echo $dados_reserva["id_reserva"]; ?></td>
                    <td><?php echo $dados_reserva["data_entrada"]; ?></td>
                    <td><?php echo $dados_reserva["data_saida"] ?? ''; ?></td>
                    <td><?php echo $dados_reserva["valor_total"]; ?></td>
                    <td><?php echo $dados_reserva["quantidade_ocupantes"] ?? ''; ?></td>
                    <td><?php echo $dados_reserva["forma_de_pagamento"]; ?></td>
                </tr>
            <?php } ?>
        </table>
        <div class="investimento">
            <span>Total investido em reservas: R$ <?php echo $total_investido; ?></span>
        </div>
    </div>

<div class="comprovante">
<ul>
<li class="comprovante-li"><a href="http://localhost/hotelurbano/select-reserva.php"> | Emitir comprovante</a></li>
</ul>
       </div>
        <div class= "delete-reserva">
                 <a class="delete-button" href="deletar-reserva.php"><input type="submit" value="Deletar reserva"></a>
       </div>
      <br>
    <div class="atualizar-reserva">
     <a href="http://localhost/hotelurbano/reservas/atualizar-reservas.php"><button type="submit">Atualizar reserva</button></a>   
    </div>
</form>

</form>

<?php } else { ?>
    <div class="alerta">
        <p>Você ainda não realizou reservas.</p>
    </div>
<?php } ?>

<?php
} else {
    echo "<p>Impossível realizar a ação.</p>";
}
mysqli_close($conn);
?>


</body>
</html>
