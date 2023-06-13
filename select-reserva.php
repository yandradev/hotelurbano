<?php
require_once("conexao.php");
session_start();

if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
} else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit;
}

$sql_reservas = "SELECT id_reserva FROM reservas WHERE id_cliente = $id_cliente";
$resultado_reservas = mysqli_query($conn, $sql_reservas);
?>

<!DOCTYPE html>
<html>
<head>
   <section></section>
<title>Selecionar Reserva</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="seu_estilo.css">
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Raleway:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@500&family=Questrial&family=Raleway:wght@200&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

section {
    background: linear-gradient(90deg, rgba(243, 108, 92, 1) 0%, rgba(72, 98, 183, 1) 47%, rgba(76, 187, 163, 1) 94%);
    width: 100%;
    height: 2rem;
}

img {
    width: 5rem;
    display: block;
    margin: auto;
}

h2 {
    font-family: 'DM Serif Display', serif;
        margin-top: 1%;
        text-align: center;
        font-size: 25px;
        text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0, 0, 0, 0.15);
        color: black;
}

.reserva select {
    display: block;
    margin: auto;
    margin-top: 2%;
    width: 20%;
    padding: 10px 2px 2px;
    border-radius: 10px;
}

label {
  display: flex;
  justify-content: center;
  margin-top: 5%;
}

.comprovante input[type=submit] {
    background: linear-gradient(90deg, rgb(238, 85, 69) 0%, rgb(29, 74, 220) 47%, rgb(11, 189, 150) 94%);
    border-style: none;
    padding: 6px 35px 8px;
    color: white;
    font-family: 'Oswald', sans-serif;
    font-size: 17px;
    border-radius: 30px;
    text-shadow: 1px 1px 1px black;
    margin-top: 2rem;
   
}
.comprovante {
  display: flex;
  justify-content: center;
}

.reserva-0 label{
    margin-top: 2%;
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    text-shadow: 2px 2px 0px #eee9e9, 5px 4px 0px rgba(0, 0, 0, 0.15);
    color: black;
}

</style>
<body>
   <img src="http://localhost/hotelurbano/homepage/img-homepage/logourbano.png">
    <h2>Selecione a reserva para emitir o comprovante:</h2>
    <form action="emitir_comprovante.php" method="post">
      <div class="reserva-0">
        <label for="id_reserva">Número da reserva:</label>
      </div>
        <div class="reserva">
        <select id="id_reserva" name="id_reserva" required>
        <option value=""></option>
        <?php while ($dados_reserva = mysqli_fetch_assoc($resultado_reservas)) { ?>
               
                <option value="<?php echo $dados_reserva['id_reserva']; ?>">
                    Reserva <?php echo $dados_reserva['id_reserva']; ?>
                </option>
            <?php } ?>
        </select>
      </div>
       <div class="comprovante">
      <input type="submit" value="Emitir Comprovante">
       </div>
    </form>
</body>
</html>
