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

$id_quarto = null; 


if (isset($_GET['id_cliente'])) {
  
 
$id_cliente = $_GET['id_cliente'];
}

$valorCafe = 0;
$valorMeiaPensao = 0;
$valorPensaoCompleta = 0;


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_quarto'])) {
  $id_quarto = $_GET['id_quarto'];

$sql = "SELECT * FROM quartos WHERE id_quarto =  $id_quarto";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  
 
$row = $result->fetch_assoc();


?>
  <section></section>
  <div class="box"></div>
  <img src="http://localhost/hotelurbano/reservas/img-reservas/pessoa.jpg">
  <br>

  <div class="container">
    <form action="cadastrar-reserva.php" method="POST" id="reserva-form" name="reserva-form">
      <div class="container">
        <fieldset>
          <div class="input-box-1">
 
          <label>Agendamento de reserva :</label>
          
        
          </div>
          <br>
         
         
          <div class="input-box-quarto">
            <label> ID quarto:</label>
            <br>
            <input type="text" name="id_quarto" value="<?php echo $id_quarto ?>" readonly>
          </div>
         <br>
         <div class="input-box-quarto">
            <label> ID cliente:</label>
            <br>
            <input type="text" name="id_cliente" value="<?php echo $id_cliente ?>" readonly>
          </div>
          <br>
          <div class="input-box-quarto">
            <label>Quarto escolhido:</label>
            <br>
            <input type="text" value="<?php echo $row["tipo_quarto"]; ?>" readonly>
          </div>
          <br>
         
          <div class="input-box">
  <label>Regime alimentar:</label>
  <br>
  <select id="alimentacao" name="alimentacao" required onchange="calcularValorTotal()">
    <option value=""></option>
    <?php
    require_once 'conexao.php';

    $id_quarto = $_GET['id_quarto'];

    $query = "SELECT valor_cafe, valor_meia, valor_completa FROM quartos WHERE id_quarto = $id_quarto";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $valorCafe = $row['valor_cafe'];
    $valorMeia = $row['valor_meia'];
    $valorCompleta = $row['valor_completa'];

    echo "<option value=\"$valorCafe\">Café da Manhã - R$ $valorCafe</option>";
    echo "<option value=\"$valorMeia\">Meia Pensão - R$ $valorMeia</option>";
    echo "<option value=\"$valorCompleta\">Pensão Completa - R$ $valorCompleta</option>";
    ?>
  </select>
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
    <option value="">Selecione</option>
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
          <input type="text" id="num-noites" readonly placeholder="Em andamento" >
          <br>
          <br>
          <div class="input-box">
  <label for="valor_total">Valor total:</label>
  <br>
  <input type="number" id="valor_total" name="valor_total" readonly placeholder="Calculando valor...">
</div>
<br>
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

  var valorRegimeAlimentar = document.getElementById('alimentacao').value;
  
  
  var dataEntrada = new Date(document.getElementById('check-in').value);
  var dataSaida = new Date(document.getElementById('check-out').value);
  

  var diffTime = Math.abs(dataSaida - dataEntrada);
  var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

  var valorTotal = valorRegimeAlimentar * diffDays;
  
  
  document.getElementById('valor_total').value = valorTotal;
  document.getElementById('num-noites').value = diffDays + " noite(s)";
}

document.getElementById('alimentacao').addEventListener('change', calcularValorTotal);
document.getElementById('check-in').addEventListener('change', calcularValorTotal);
document.getElementById('check-out').addEventListener('change', calcularValorTotal);


function validarReserva(event) {
  event.preventDefault();

  var alimentacao = document.forms['reserva-form']['alimentacao'].value;
  var checkIn = document.forms['reserva-form']['check-in'].value;
  var checkOut = document.forms['reserva-form']['check-out'].value;
  var ocupantes = document.forms['reserva-form']['ocupantes'].value;
  var pagamento = document.forms['reserva-form']['pagamento'].value;

  if (alimentacao === '' || checkIn === '' || checkOut === '' || ocupantes === '' || pagamento === '') {
    alert('Por favor, preencha todos os campos obrigatórios.');
    return;
  }


  var dataAtual = new Date();
  var dataCheckIn = new Date(checkIn);

  if (dataCheckIn < dataAtual) {
    alert('A data de check-in não pode ser uma data passada.');
    return;
  }


  var dataCheckOut = new Date(checkOut);

  if (dataCheckOut < dataAtual) {
    alert('A data de check-out não pode ser uma data passada.');
    return;
  }

  
  if (dataCheckOut <= dataCheckIn) {
    alert('A data de check-out deve ser posterior à data de check-in.');
    return;
  }

 
  document.forms['reserva-form'].submit();
}

document.getElementById('reserva-form').addEventListener('submit', validarReserva);

  </script>
</body>
</html>


