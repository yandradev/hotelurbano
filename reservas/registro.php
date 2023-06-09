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
    <form action="" method="POST" id="reserva-form" name="reserva-form" onsubmit="validarReserva(event)">
      <div class="container">
        <fieldset>

          <div class="input-box-1">
            <label> Agendamento de reserva </label>


          </div>
          <br>
          <div class="input-box">
            <label>Data de entrada:</label>
            <br>
            <input type="date" id="check-in" name="check-in">
          </div>
          <br>
          <div class="input-box">
            <label>Data de saída:</label>
            <br>
            <input type="date" id="check-out" name="check-out">
          </div>
          <br>
          <div class="input-box">
            <label>Quantidade de ocupantes:</label>
            <br>
            <select id="ocupantes">
              <option value="option"></option select>
              <option value="option-1">1</option>
              <option value="option-2">2</option>
              <option value="option-3">3</option>
              <option value="option-4">4</option>
            </select>
          </div>
          <br>
          <div class="input-box">
            <label>Formas de pagamento:</label>
            <br>
            <select id="pagamento" onchange="mostrarOpcoesPagamento()">
              <option value="option"></option>
              <option value="option-1">Pix</option>
              <option value="option-2">Dinheiro físico</option>
            </select>
          </div>
          
          <div id="opcoes-pix" class="input-pagamento" style="display: none;">
          <br>
            <label>Chave Pix:</label>
            <br>
            <input type="text" id="chave-pix" name="chave-pix">
            <br>
            <label>Nome Completo:</label>
            <br>
            <input type="text" id="nome-completo" name="nome-completo">
          </div>
          
          <div id="opcoes-dinheiro" class="input-pagamento" style="display: none;">
           <br>
            <label>Local de pagamento:</label>
            <br>
            <select id="local-pagamento">
              <option value="option"></option>
              <option value="option-1"> Na data de entrada</option>
              <option value="option-2"> Na data de saída</option>
              <option value="option-3">Recepção</option>
              <option value="option-4">Balcão de atendimento</option>
            </select>
          </div>
          <br>
          <div class="input-box">
            <label>Valor total:</label>
            <br>
            <input type="text" value="" readonly>
          </div>
      </div>
      
      </fieldset>



  <div class="input-submit">
    <button type="submit" >Confirmar</button>
  </div>

  </form>
  <script src="http://localhost/hotelurbano/reservas/script.js"></script>


</body>

</html>