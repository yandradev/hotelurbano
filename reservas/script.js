
function mostrarOpcoesPagamento()  {
  var selectPagamento = document.getElementById("pagamento");
  var divOpcoesPix = document.getElementById("opcoes-pix");
  var selectPagamento = document.getElementById("pagamento");
  var divOpcoesDinheiro = document.getElementById("opcoes-dinheiro");

  if (selectPagamento.value === "Pix") { 
    divOpcoesPix.style.display = "block";
  
   
  } else {
    divOpcoesPix.style.display = "none"; 
  }
  
    if (selectPagamento.value === "Dinheiro físico") { 
      divOpcoesDinheiro.style.display = "block";
    } else {
      divOpcoesDinheiro.style.display = "none";
    }
  }




const budgetCheckboxes = document.querySelectorAll('.budget');
const cancellationCheckboxes = document.querySelectorAll('.cancellation');
const filterButton = document.querySelector('#btn-filtrar');
const produtos = Array.from(document.querySelectorAll('.produto'));


function filtrar() {

  const budgetValues = Array.from(budgetCheckboxes)
    .filter(checkbox => checkbox.checked)
    .map(checkbox => checkbox.value);

 
  const cancellationValues = Array.from(cancellationCheckboxes)
    .filter(checkbox => checkbox.checked)
    .map(checkbox => checkbox.value);

  
  produtos.forEach(produto => {
    const produtoBudget = produto.getAttribute('data-budget');
    const produtoCancellation = produto.getAttribute('data-cancellation');
    const isVisible =
      (budgetValues.length === 0 || budgetValues.includes(produtoBudget)) &&
      (cancellationValues.length === 0 || cancellationValues.includes(produtoCancellation));
    produto.style.display = isVisible ? 'block' : 'none';
   
  });
 
}


function exibirPrompt() {
  alert('Filtrando produtos...');
  filtrar();
}


filterButton.addEventListener('click', exibirPrompt);


function validar() {
  if (confirm("Aviso: Efetue o login para a realização da reserva. Deseja continuar?")) {
    window.location.href = "http://localhost/hotelurbano/entrada/login.php";
  }
}


function validarReserva(event) {
  event.preventDefault();

  var checkInInput = document.getElementById("check-in");
  var checkOutInput = document.getElementById("check-out");

  var checkInDate = new Date(checkInInput.value);
  var checkOutDate = new Date(checkOutInput.value);

  var today = new Date();
  today.setHours(0, 0, 0, 0); 

  if (
    checkInInput.value === "" ||
    checkOutInput.value === "" ||
    isNaN(checkInDate.getTime()) ||
    isNaN(checkOutDate.getTime())
  ) {
    alert("Por favor, insira datas válidas de check-in e check-out no formato dd/mm/aaaa.");
    return;
  }

  if (checkInDate < today || checkOutDate < today) {
    alert("As datas de check-in e check-out devem ser posteriores à data atual.");
    return;
  }

  if (checkInDate >= checkOutDate) {
    alert("A data de check-in deve ser anterior à data de check-out.");
    return;
  }


  document.getElementById("reserva-form").submit();
}



var valorCafe = '<?php echo isset($row["valor_cafe"]) ? $row["valor_cafe"] : ""; ?>';
var valorMeia = '<?php echo isset($row["valor_meia"]) ? $row["valor_meia"] : ""; ?>';
var valorCompleta = '<?php echo isset($row["valor_completa"]) ? $row["valor_completa"] : ""; ?>';

function redirecionarParaRegistro(opcao) {
  var valor = '';

  if (opcao === 'valor_cafe') {
    valor = valorCafe;
  } else if (opcao === 'valor_meia') {
    valor = valorMeia;
  } else if (opcao === 'valor_completa') {
    valor = valorCompleta;
  }

  var idQuarto = '<?php echo isset($row["id_quarto"]) ? $row["id_quarto"] : ""; ?>';
  var url = "http://localhost/hotelurbano/reservas/registro.php?id_quarto=" + idQuarto + "&valor=" + valor;
 
  window.location.href = url;
}

  

