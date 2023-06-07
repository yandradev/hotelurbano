<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Reserva</title>
</head>
<body>
   <section></section>
   <div class="box"></div>
   <img src="/reservas/img-reservas/pessoa.jpg">
   <br>
   <div class="container">
   <form action="" method="POST">
<div class="container">
<fieldset>
  
    <div class="input-box-1">
  <label> Agendamento de reserva </label>

   
  </div>
   <br>
      <div class="input-box">
  <label>Data de entrada:</label>
    <br>
  <input type="date">
</div>
<br>
<div class="input-box">
    <label>Data de saída:</label>
      <br>
    <input type="date">
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
      <select id="pagamento">
        <option value="option"></option select>
        <option value="option-1">Pix</option>
        <option value="option-2">Dinheiro físico</option>

      </select>
  </div>
  <br>
  <div class="input-box">
    <label>Valor total:</label>
      <br>
    <input type="text" value="">
  </div>
</div>

</fieldset>

</div>

<div class="input-submit">
  <button type="submit">Confirmar</button>
</div>

</form>
</body>
</html>