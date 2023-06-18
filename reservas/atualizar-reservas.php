<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selecione a reserva</title>
</head>

<body>
  <?php
  session_start();
  if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
  } else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit;
  }

  require_once 'conexao.php';

  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_reserva'])) {
    $idReserva = $_GET['id_reserva'];

    // Verificar se a reserva pertence ao cliente
    $sql = "SELECT id_reserva FROM reservas WHERE id_reserva = $idReserva AND id_cliente = $id_cliente";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
      // Redirecionar para a página de atualização com o ID da reserva
      header("Location: http://localhost/hotelurbano/reservas/update-reservas.php?id_reserva=$idReserva");
      exit;
    } else {
      echo "Reserva não encontrada.";
      exit;
    }
  }

  $sql = "SELECT id_reserva FROM reservas WHERE id_cliente = $id_cliente";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $reservas = $result->fetch_all(MYSQLI_ASSOC);
  } else {
    $reservas = [];
  }

  $conn->close();
  ?>

  <form action="http://localhost/hotelurbano/reservas/update-reservas.php" method="GET">
    <label for="reserva">Selecione a reserva:</label>
    <select name="id_reserva" id="reserva" required>
      <option value="">Selecione</option>
      <?php foreach ($reservas as $reserva): ?>
        <option value="<?php echo $reserva['id_reserva']; ?>">
          Reserva <?php echo $reserva['id_reserva']; ?>
        </option>
      <?php endforeach; ?>
    </select>
    <br>
    <button type="submit">Atualizar</button>
  </form>
</body>

</html>
