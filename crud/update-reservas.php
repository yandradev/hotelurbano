<?php
require_once 'conexao.php';



$idReserva = null;

$valorCafe = 0;
$valorMeiaPensao = 0;
$valorPensaoCompleta = 0;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_reserva'])) {
  $idReserva = $_GET['id_reserva'];

  $sql = "SELECT quartos.id_quarto, quartos.tipo_quarto, reservas.data_entrada, reservas.data_saida, reservas.quantidade_ocupantes, reservas.forma_de_pagamento, reservas.valor_total, quartos.valor_cafe, quartos.valor_meia, quartos.valor_completa, reservas.regime_alimentacao
  FROM reservas
  JOIN quartos ON reservas.id_quarto = quartos.id_quarto
  WHERE reservas.id_reserva = " . intval($idReserva);
  
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $checkIn = $row['data_entrada'];
    $checkOut = $row['data_saida'];
    $numOcupantes = $row['quantidade_ocupantes'];
    $formaPagamento = $row['forma_de_pagamento'];
    $valorTotal = $row['valor_total'];

    $valorCafe = $row['valor_cafe'];
    $valorMeiaPensao = $row['valor_meia'];
    $valorPensaoCompleta = $row['valor_completa'];

    $regimeAlimentacao = $row['regime_alimentacao'];
  } else {
    echo "Reserva não encontrada.";
    exit;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idReserva = $_POST['id_reserva'];
  $dataEntrada = $_POST['data_entrada'];
  $dataSaida = $_POST['data_saida'];
  $numOcupantes = $_POST['num_ocupantes'];

  $valorTotal = $_POST['valor_total'];
  $regimeAlimentacao = $_POST['regime_alimentacao'];
  $formaPagamento = $_POST['forma_pagamento'];
  
  if ($formaPagamento === 'Dinheiro físico') {
    $localPagamento = $_POST['local-pagamento'];
    $formaPagamento = "Dinheiro físico - $localPagamento";
  }

  $sql = "UPDATE reservas SET valor_total = $valorTotal, data_entrada = '$dataEntrada', data_saida = '$dataSaida',
          quantidade_ocupantes = $numOcupantes, regime_alimentacao = '$regimeAlimentacao', forma_de_pagamento = '$formaPagamento'
          WHERE id_reserva = $idReserva";

  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Reserva atualizada! :)"); window.location.href = "http://localhost/hotelurbano/crud/read-reservas.php";</script>';
  } else {
    echo "Erro ao atualizar a reserva: " . mysqli_error($conn);
  }
}
?>

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
  <section></section>
  <div class="box"></div>
  <img src="http://localhost/hotelurbano/reservas/img-reservas/pessoa.jpg">
  <br>

  <div class="container">
    <form action="" method="POST" id="reserva-form" name="reserva-form">
      <div class="container">
        <fieldset>
          <input type="hidden" name="id_reserva" value="<?php echo $idReserva; ?>">
          <div class="input-box-1">
            <label>Atualização de reserva:</label>
          </div>
          <br>
          <div class="input-box-reserva">
            <label for="id_reserva">Número da reserva:</label>
            <br>
            <input type="text" id="id_reserva" name="id_reserva" value="<?php echo $idReserva; ?>" readonly>
          </div>
          <br>
          <div class="input-box-quarto" >
            <label>Quarto escolhido:</label>
            <br>
            <input type="text" id="quarto" name="quarto" value="<?php echo $row['tipo_quarto']; ?>" readonly>
          </div>
          <br>
          <div class="input-box">
          <label for="regime_alimentacao">Regime de Alimentação:</label>
<br>
<select name="regime_alimentacao" id="regime_alimentacao">
  <option value="Café da Manhã" <?php if ($regimeAlimentacao === 'Café da Manhã') echo 'selected'; ?>>Café da Manhã</option>
  <option value="Meia Pensão" <?php if ($regimeAlimentacao === 'Meia Pensão') echo 'selected'; ?>>Meia Pensão</option>
  <option value="Pensão Completa" <?php if ($regimeAlimentacao === 'Pensão Completa') echo 'selected'; ?>>Pensão Completa</option>
</select>

          <br>
          <br>
          <div class="input-box">
            <label for="data_entrada">Data de entrada:</label>
            <br>
            <input type="date" id="data_entrada" name="data_entrada" value="<?php echo $checkIn; ?>">
          </div>
          <br>
          <div class="input-box">
            <label for="data_saida">Data de saída:</label>
            <br>
            <input type="date" id="data_saida" name="data_saida" value="<?php echo $checkOut; ?>">
          </div>
          <br>
          <label>Número de ocupantes:</label>
          <br>
          <select id="num_ocupantes" name="num_ocupantes" required>
            <option value=""></option>
            <?php
            $id_quarto = $row['id_quarto'];

            $query = "SELECT ocupacao_maxima FROM quartos WHERE id_quarto = $id_quarto";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $ocupacao_maxima = $row['ocupacao_maxima'];

            for ($i = 1; $i <= $ocupacao_maxima; $i++) {
              $selected = ($i == $numOcupantes) ? 'selected' : '';
              echo "<option value=\"$i\" $selected>$i</option>";
            }
            ?>
          </select>
          <br>
          <br>
          <div class="input-box">
        
            
<div class="input-box">
  <label for="forma_pagamento">Forma de Pagamento:</label>
  <br>
  <select id="forma_pagamento" name="forma_pagamento" required>
    
  <option value=""></option>
  <option value="Pix" <?php if ($formaPagamento == 'Pix') echo 'selected'; ?>>Pix</option>
    <option value="Dinheiro físico" <?php if ($formaPagamento == 'Dinheiro físico') echo 'selected'; ?>>Dinheiro físico</option>
  </select>
  <br>
</div>

<div id="opcoes-pix" style="display: <?php echo ($formaPagamento == 'Pix') ? 'block' : 'none'; ?>">
  <br>
  <label style="color: red; font-size: 14px;">Chave pix Hotel Urbano/CNPJ:</label>
  <br>
  <input type="text" id="chave-pix" name="chave-pix" value="12.345.678/0001-00" readonly>
  <br>
  <label style="color: red; font-size: 14px;">Razão social:</label>
  <br>
  <input type="text" id="razao-social" name="razao-social" value="Hospedaria Urbana S/A" readonly>
</div>

<div id="local-pagamento" name= "local-pagamento" class="input-pagamento" style="display: none;">
  <br>
  <label>Local de pagamento:</label>
  <br>
  <select id="local-pagamento-select" name="local-pagamento">
    <option value=""></option>
    <option value="Recepção na data de entrada" <?php if ($formaPagamento === 'Dinheiro físico - Recepção na data de entrada') echo 'selected'; ?>>Recepção na data de entrada</option>
    <option value="Durante a estadia" <?php if ($formaPagamento === 'Dinheiro físico - Durante a estadia') echo 'selected'; ?>>Durante a estadia</option>
    <option value="Recepção na data de saída" <?php if ($formaPagamento === 'Dinheiro físico - Recepção na data de saída') echo 'selected'; ?>>Recepção na data de saída</option>
  </select>
</div>

<br>

<div class="input-box">
  <label for="valor_total">Valor total:</label>
  <br>
  <input type="number" id="valor_total" name="valor_total" value="<?php echo $valorTotal; ?>" readonly placeholder="Calculando valor...">
</div>
<br>


          </div>
          </div>
        </fieldset>
      </div>
      <div class="button-box"> <input type="submit" name="submit" value="Atualizar reserva"> </div>
    </form>
    <script>
  const formaPagamento = document.getElementById('forma_pagamento');
  const opcoesPix = document.getElementById('opcoes-pix');
  const opcoesDinheiro = document.getElementById('local-pagamento');
  const localPagamentoSelect = document.getElementById('local-pagamento-select');

  function mostrarOpcoesPagamento() {
    if (formaPagamento.value === 'Pix') {
      opcoesPix.style.display = 'block';
      opcoesDinheiro.style.display = 'none';
    } else if (formaPagamento.value === 'Dinheiro físico') {
      opcoesPix.style.display = 'none';
      opcoesDinheiro.style.display = 'block';
    } else {
      opcoesPix.style.display = 'none';
      opcoesDinheiro.style.display = 'none';
    }
  }

  function atualizarLocalPagamento() {
    if (formaPagamento.value === 'Dinheiro físico') {
      localPagamentoSelect.style.display = 'block';
    } else {
      localPagamentoSelect.style.display = 'none';
    }
  }

  formaPagamento.addEventListener('change', () => {
    mostrarOpcoesPagamento();
    atualizarLocalPagamento();
  });

  mostrarOpcoesPagamento();
  atualizarLocalPagamento();

  const regimeAlimentacao = document.getElementById('regime_alimentacao');
  const dataEntrada = document.getElementById('data_entrada');
  const dataSaida = document.getElementById('data_saida');
  const valorTotal = document.getElementById('valor_total');

  regimeAlimentacao.addEventListener('change', calcularValorTotal);
  dataEntrada.addEventListener('change', calcularValorTotal);
  dataSaida.addEventListener('change', calcularValorTotal);

  function calcularValorTotal() {
    const valorCafe = <?php echo $valorCafe; ?>;
    const valorMeiaPensao = <?php echo $valorMeiaPensao; ?>;
    const valorPensaoCompleta = <?php echo $valorPensaoCompleta; ?>;
    const checkIn = new Date(dataEntrada.value);
    const checkOut = new Date(dataSaida.value);
    const numDias = Math.ceil((checkOut - checkIn) / (1000 * 60 * 60 * 24));

    let valorDiaria = 0;
    if (regimeAlimentacao.value === 'Café da Manhã') {
      valorDiaria = valorCafe;
    } else if (regimeAlimentacao.value === 'Meia Pensão') {
      valorDiaria = valorMeiaPensao;
    } else if (regimeAlimentacao.value === 'Pensão Completa') {
      valorDiaria = valorPensaoCompleta;
    }

    const valorTotalCalculado = (valorDiaria * numDias).toFixed(2);
    valorTotal.value = valorTotalCalculado;
  }

  calcularValorTotal();
</script>

