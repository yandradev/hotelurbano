<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/hotelurbano/reservas/style.css">
  <title>Reserva</title>
</head>

<body>

<?php
  require_once 'conexao.php';

  session_start();
  if (isset($_COOKIE['id_cliente'])) {
    $id_cliente = $_COOKIE['id_cliente'];
  }

  if (isset($_GET['id_quarto'])) {
    $id_quarto = $_GET['id_quarto'];
  }

  if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
  }
  ?>

  <section></section>
  <div class="box"></div>
  <img src="http://localhost/hotelurbano/reservas/img-reservas/pessoa.jpg">
  <br>
  <div class="container">
    <form action="cadastro-reserva.php" method="POST" id="reserva-form" name="reserva-form">
      <div class="container">
        <fieldset>
          <input type="hidden" name="id_quarto" value="<?php echo $id_quarto; ?>">
          <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">

          <div class="input-box-1">
            <label>Agendamento de reserva:</label>
          </div>
          <br>
          <div class="input-box">
            <label>Data de entrada:</label>
            <br>
            <input type="date" id="check-in" name="check-in" required>
          </div>
          <br>
          <div class="input-box">
            <label>Data de saída:</label>
            <br>
            <input type="date" id="check-out" name="check-out" required>
          </div>
          <br>
          <div class="input-box">
            <label>Quantidade de ocupantes:</label>
            <br>
            <select id="ocupantes" name="ocupantes" required>
              <option value=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <br>
          <div class="input-box">
            <label>Formas de pagamento:</label>
            <br>
            <select id="pagamento" onchange="mostrarOpcoesPagamento()" name="pagamento" required>
              <option value=""></option>
              <option value="Pix">Pix</option>
              <option value="Dinheiro físico">Dinheiro físico</option>
            </select>
          </div>

          <div id="opcoes-pix" class="input-pagamento" style="display: none;">
            <br>
            <label>Chave pix Hotel Urbano/CNPJ:</label>
            <br>
            <input type="text" id="chave-pix" name="chave-pix" value="12.345.678/0001-00" readonly>
            <br>
            <label>Razão social:</label>
            <br>
            <input type="text" id="razao-social" name="razao-social" value="Hospedaria Urbana S/A" readonly>
          </div>

          <div id="opcoes-dinheiro" class="input-pagamento" style="display: none;">
            <br>
            <label>Local de pagamento:</label>
            <br>
            <select id="local-pagamento" name="local-pagamento" required>
              <option value=""></option>
              <option value="Recepção na data de entrada">Recepção na data de entrada</option>
              <option value="Durante a estadia">Durante a estadia</option>
              <option value="Recepção na data de saída">Recepção na data de saída</option>
            </select>
          </div>
          <br>
          <div class="input-box">
            <label>Valor total:</label>
            <br>
            <input type="text" name="valor_total" value="<?php echo isset($_GET['valor']) ? $_GET['valor'] : ''; ?>"   required>

          </div>
        </fieldset>
      </div>
      
      <div class="input-submit">
            <input type="submit" value="Confirmar reserva" onclick="validarReserva(event)">
          </div>
    </form>
  </div>
  
  <script src="http://localhost/hotelurbano/reservas/script.js"></script>
</body>

</html>

