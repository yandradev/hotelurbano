
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








