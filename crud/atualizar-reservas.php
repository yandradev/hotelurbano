<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selecione a reserva</title>
</head>
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
    width: 10rem;
    height: 10rem;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: -12%;
    padding: 12px 12px 12px;
  }

  .form-image {
    display: flex;
    justify-content: center;
  }

  .box {
    width: 10rem;
    height: 10rem;
    background-color: rgba(243, 108, 92, 1);
    margin: auto;
    display: block;
    margin-top: 1%;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  label {
    margin-top: -20rem;
    text-transform: uppercase;
    font-family: 'Oswald', sans-serif;
    font-size: 18px;
    text-shadow: 2px 2px 0px #eee9e9, 5px 4px 0px rgba(0, 0, 0, 0.15);
    color: black;
    display: flex;
    justify-content: center;
    margin-top: 5%;
  }

  select {
    display: block;
    margin: auto;
    margin-top: 4%;
    width: 20%;
    padding: 10px 2px 2px;
    border-radius: 15px;
  }

  button {
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

  .atualizar {
    display: flex;
    justify-content: center;
  }

</style>

<body>
  <?php
  

  require_once 'conexao.php';

  $sql = "SELECT id_reserva FROM reservas";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $reservas = $result->fetch_all(MYSQLI_ASSOC);
  } else {
    $reservas = [];
  }

  $conn->close();
  ?>

  <section></section>
  <div class="box"></div>
  <div class="form-image">
    <img src="http://localhost/hotelurbano/reservas/img-reservas/people.jpg">
  </div>
  <form action="update-reservas.php" method="GET">

    <label for="reserva">ID da reserva:</label>
    <select name="id_reserva" id="reserva" required>
      <option value=""></option>
      <?php foreach ($reservas as $reserva): ?>
        <option value="<?php echo $reserva['id_reserva']; ?>">
          Reserva <?php echo $reserva['id_reserva']; ?>
        </option>
      <?php endforeach; ?>
    </select>

    <br>
    <div class="atualizar">
      <button type="submit">Atualizar</button>
    </div>
  </form>
</body>

</html>
