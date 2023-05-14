// Capturando os elementos do DOM
const budgetCheckboxes = document.querySelectorAll('.budget');
const cancellationCheckboxes = document.querySelectorAll('.cancellation');
const filterButton = document.querySelector('#btn-filtrar');
const produtos = Array.from(document.querySelectorAll('.produto'));

// Função para aplicar os filtros
function filtrar() {
  // Obtendo os valores selecionados nos checkboxes de orçamento
  const budgetValues = Array.from(budgetCheckboxes)
    .filter(checkbox => checkbox.checked)
    .map(checkbox => checkbox.value);

  // Obtendo os valores selecionados nos checkboxes de cancelamento
  const cancellationValues = Array.from(cancellationCheckboxes)
    .filter(checkbox => checkbox.checked)
    .map(checkbox => checkbox.value);

  // Filtrando os produtos com base nos valores selecionados
  produtos.forEach(produto => {
    const produtoBudget = produto.getAttribute('data-budget');
    const produtoCancellation = produto.getAttribute('data-cancellation');
    const isVisible =
      (budgetValues.length === 0 || budgetValues.includes(produtoBudget)) &&
      (cancellationValues.length === 0 || cancellationValues.includes(produtoCancellation));
    produto.style.display = isVisible ? 'block' : 'none';
  });
}

// Função para exibir o prompt de comando colorido
function exibirPrompt() {
  alert('Filtrando produtos...');
  filtrar();
}

// Adicionando evento de clique ao botão de filtro
filterButton.addEventListener('click', exibirPrompt);









