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
  } else {
    header("Location: http://localhost/hotelurbano/entrada/login.php");
    exit;
  }

  if (isset($_GET['id_quarto'])) {
    $id_quarto = $_GET['id_quarto'];
  }

  if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
  }


$sql = "SELECT data_entrada, data_saida FROM reservas WHERE id_quarto = $id_quarto";
$result = $conn->query($sql);

$reservas_existentes = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $reservas_existentes[] = $row;
  }
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
          
          <?php
            $sql = "SELECT * FROM quartos WHERE id_quarto =  $id_quarto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $valor_cafe = $row['valor_cafe'];
                $valor_meia = $row['valor_meia'];
                $valor_completa = $row['valor_completa'];

                $valor = isset($_GET['valor']) ? $_GET['valor'] : '0';

                $regimeAlimentar = array(
                  $valor_cafe => 'Café da Manhã',
                  $valor_meia => 'Meia Pensão',
                  $valor_completa => 'Pensão Completa'
                );

                $regime_alimentar = isset($regimeAlimentar[$valor]) ? $regimeAlimentar[$valor] : 'Regime não especificado';
                ?>
          </div>
          <br>
          <div class="input-box-quarto">
            <label>Quarto escolhido:</label>
            <br>
            <input type="text" value="<?php echo $row["tipo_quarto"]; ?>" readonly>
          </div>
          <br>
          <div class="input-box-quarto">
            <label>Regime alimentar escolhido:</label>
            <br>
            <input type="text" name="regime_alimentar" value="<?php echo $regime_alimentar; ?>" readonly>
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
  <label>Número de ocupantes:</label>
  <br>
  <select id="quarto" name="ocupantes" onchange="atualizarOpcoesOcupantes()" required>
    <option value=""> Selecione</option>
    <?php
    require_once 'conexao.php';

    $id_quarto = $_GET['id_quarto'];

    $query = "SELECT ocupacao_maxima FROM quartos WHERE id_quarto = $id_quarto";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $ocupacao_maxima = $row['ocupacao_maxima'];

    for ($i = 1; $i <= $ocupacao_maxima; $i++) {
      echo "<option value=\"$i\">$i</option>";
    }
    ?>
  </select>
</div>

          <br>
          <div class="input-box">
  <label>Formas de pagamento:</label>
  <br>
  <select id="pagamento" onchange="mostrarOpcoesPagamento()" name="pagamento" required>
    <option value="">Selecione</option>
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
          <label>Número de noites selecionadas:</label>
          <br>
          <input type="text" id="num-noites" readonly placeholder="Em andamento">
          <br>
          <br>
          <div class="input-box">
            <label>Valor total:</label>
            <br>
            <input type="text" id="valor-total" name="valor_total" value="<?php echo isset($_GET['valor']) ? $_GET['valor'] : ''; ?>" readonly placeholder="Calculando valor">
          </div>
        </fieldset>
      </div>
      <div class="button-box">
        <input class="button-box" type="submit" value="Confirmar reserva" onclick="validarReserva(event)">
      </div>
    </form>
    <?php
 
  function verificarReservaProxima($reservas, $checkIn, $checkOut) {
    foreach ($reservas as $reserva) {
      $dataEntrada = $reserva['data_entrada'];
      $dataSaida = $reserva['data_saida'];
      
      if (($checkIn >= $dataEntrada && $checkIn <= $dataSaida) || ($checkOut >= $dataEntrada && $checkOut <= $dataSaida)) {
        return true;
      }
    }
    return false;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkIn = $_POST['check-in'];
    $checkOut = $_POST['check-out'];
    
    if (verificarReservaProxima($reservas_existentes, $checkIn, $checkOut)) {
      echo "<script>alert('Desculpe, você já possui uma reserva ativa ou muito próxima dessa data. Por favor, escolha outra data.');</script>";
    } else {
    
    }
  }
  ?>
   
   <?php
      }
    } else {
      echo "<p>Nenhum resultado encontrado.</p>";
    }
    $conn->close();
    ?>
  </div>


  <script src="http://localhost/hotelurbano/reservas/script.js"></script>

  <script>
  function atualizarOpcoesOcupantes() {
      var selectQuarto = document.getElementById("quarto");
      var selectOcupantes = document.getElementById("ocupantes");
      var selectedOption = selectQuarto.options[selectQuarto.selectedIndex];

      selectOcupantes.innerHTML = "";

      for (var i = 1; i <= parseInt(selectedOption.value); i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        selectOcupantes.appendChild(option);
      }
    }

    document.getElementById("quarto").addEventListener("change", atualizarOpcoesOcupantes);

function calcularValorTotal() {
  var checkIn = document.getElementById('check-in').value;
  var checkOut = document.getElementById('check-out').value;
  var valorDiaria = parseFloat("<?php echo $valor; ?>");
  var numNoites = calcularDiferencaDias(checkIn, checkOut);
  var valorTotal = valorDiaria * numNoites;
  
  document.getElementById('valor-total').value = "Calculando valor";
  document.getElementById('num-noites').value = numNoites + " noite(s)";
  setTimeout(function() {
    document.getElementById('valor-total').value = valorTotal.toFixed(2);
  }, 1000);
}

function calcularDiferencaDias(data1, data2) {
  var date1 = new Date(data1);
  var date2 = new Date(data2);
  var diffTime = Math.abs(date2 - date1);
  var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
  return diffDays;
}

document.getElementById('quarto').addEventListener('change', atualizarOpcoesOcupantes);
document.getElementById('check-in').addEventListener('change', calcularValorTotal);
document.getElementById('check-out').addEventListener('change', calcularValorTotal);

function validarReserva(event) {
  event.preventDefault(); // Impede o envio do formulário se houver campos inválidos

  var checkIn = document.getElementById('check-in').value;
  var checkOut = document.getElementById('check-out').value;
  var ocupantes = document.getElementById('quarto').value;
  var pagamento = document.getElementById('pagamento').value;

 
  if (checkIn === '' || checkOut === '' || ocupantes === '' || pagamento === '') {
    alert('Por favor, preencha todos os campos obrigatórios.');
    return;
  }


  if (checkIn >= checkOut) {
    alert('A data de check-in deve ser anterior à data de check-out.');
    return;
  }

 
  var dataAtual = new Date();
  dataAtual.setHours(0, 0, 0, 0); 


  var dataCheckIn = new Date(checkIn);
  var dataCheckOut = new Date(checkOut);

 
  if (dataCheckIn < dataAtual || dataCheckOut < dataAtual) {
    alert('Por favor, selecione datas futuras para check-in e check-out.');
    return;
  }

  document.getElementById('reserva-form').submit();
}


  </script>
</body>
</html>




