
function mostrarOpcoesPagamento()  {
  var selectPagamento = document.getElementById("pagamento");
  var divOpcoesPix = document.getElementById("opcoes-pix");
  var selectPagamento = document.getElementById("pagamento");
  var divOpcoesDinheiro = document.getElementById("opcoes-dinheiro");

  if (selectPagamento.value === "option-1") { 
    divOpcoesPix.style.display = "block";
  
   
  } else {
    divOpcoesPix.style.display = "none"; 
  }
  
    if (selectPagamento.value === "option-2") { 
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

  alert("Reserva confirmada!");

  document.getElementById("reserva-form").submit();
}

function validarQuantidadeOcupantes() {
  var selectOcupantes = document.getElementById("ocupantes");
  var quantidadeOcupantes = selectOcupantes.value;

  if (!quantidadeOcupantes) {
    alert("Por favor, selecione a quantidade de ocupantes.");
    return false;
  }

  return true;
}
