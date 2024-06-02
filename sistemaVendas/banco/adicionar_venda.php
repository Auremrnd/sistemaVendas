<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do POST
    $produtoId = $_POST['produtoId'];
    $quantidade = $_POST['quantidade'];

    // Aqui você deve adicionar a lógica para inserir a venda no banco de dados
    // por exemplo:
    // $conn->query("INSERT INTO vendas (produto_id, quantidade) VALUES ('$produtoId', '$quantidade')");
}
?>
