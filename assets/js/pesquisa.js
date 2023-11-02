// Espera até que o DOM (Document Object Model) esteja completamente carregado
document.addEventListener('DOMContentLoaded', function () {
    // Obtém a referência do formulário
    const searchForm = document.querySelector('.pesquisa__form');

    // Adiciona um ouvinte de eventos para o evento 'submit' (envio) no formulário
    searchForm.addEventListener('submit', function (event) {
        // Impede o envio padrão do formulário (recarregar a página)
        event.preventDefault();

        // Obtém o termo de pesquisa em minúsculas
        const searchTerm = document.querySelector('.pesquisa__texto').value.toLowerCase();

        // Chama a função para filtrar os produtos com base no termo de pesquisa
        filterProducts(searchTerm);
    });
});

// Função para filtrar produtos com base no termo de pesquisa
function filterProducts(searchTerm) {
    // Obtém todos os elementos com a classe 'card' (representando produtos)
    const produtos = document.querySelectorAll('.card');

    // Flag para verificar se algum item foi encontrado
    let foundItems = false;

    // Itera sobre cada produto
    produtos.forEach(produto => {
        // Obtém o nome do produto em minúsculas
        const productName = produto.querySelector('h3').textContent.toLowerCase();

        // Verifica se o termo de pesquisa está contido no nome do produto
        if (productName.includes(searchTerm)) {
            // Se sim, exibe o produto (alterando a propriedade 'display' para 'block')
            produto.style.display = 'block';
            foundItems = true;
        } else {
            // Se não, oculta o produto (alterando a propriedade 'display' para 'none')
            produto.style.display = 'none';
        }
    });

    // Exibe a mensagem quando nenhum item é encontrado
    const noItemsMessage = document.querySelector('.no-items-message');
    noItemsMessage.style.display = foundItems ? 'none' : 'block';
}
