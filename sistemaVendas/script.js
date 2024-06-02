var produtos = [
  { id: 1, nome: "Produto 1" },
  { id: 2, nome: "Produto 2" },
  { id: 3, nome: "Produto 3" },
];

var vendasRealizadas = []; // Armazenará as vendas realizadas

// Função para inicializar o sistema
function inicializarSistema() {
  // Adiciona as opções de produtos ao <select>
  var selectProduto = document.getElementById("produto");
  produtos.forEach(function (produto) {
    var option = document.createElement("option");
    option.value = produto.id;
    option.textContent = produto.nome;
    selectProduto.appendChild(option);
  });

  // Exibe as vendas realizadas
  exibirVendas();
}

// Adiciona uma venda à lista de vendas realizadas
function adicionarVenda(produtoId, quantidade) {
  var produto = produtos.find((p) => p.id == produtoId);
  if (!produto) return; // Verifica se o produto existe

  vendasRealizadas.push({ produto: produto.nome, quantidade: quantidade });
  exibirVendas();
}

// Exibe as vendas realizadas na tabela
function exibirVendas() {
  var tabelaVendas = document.getElementById("vendas-lista");
  tabelaVendas.innerHTML = ""; // Limpa a tabela

  vendasRealizadas.forEach(function (venda) {
    var newRow = document.createElement("tr");
    newRow.innerHTML =
      "<td>" + venda.produto + "</td><td>" + venda.quantidade + "</td>";
    tabelaVendas.appendChild(newRow);
  });
}

// Listener para o envio do formulário de venda
document
  .getElementById("form-venda")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Previne o envio do formulário

    // Obtem os valores dos campos
    var produto = parseInt(document.getElementById("produto").value);
    var quantidade = parseInt(document.getElementById("quantidade").value);

    // Adiciona a venda à lista de vendas
    adicionarVenda(produto, quantidade);

    // Limpa os campos do formulário
    document.getElementById("quantidade").value = "";
  });

// Inicializa o sistema quando a página carrega
document.addEventListener("DOMContentLoaded", inicializarSistema);
