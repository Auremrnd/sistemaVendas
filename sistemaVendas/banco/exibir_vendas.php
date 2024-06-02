<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "postgres", "POSTGRE", "BancoVendas");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Query para selecionar todas as vendas
$sql = "SELECT produto, quantidade FROM vendas";
$result = $conn->query($sql);

// Array para armazenar as vendas
$vendas = array();

if ($result->num_rows > 0) {
    // Adiciona cada venda ao array
    while($row = $result->fetch_assoc()) {
        $vendas[] = array(
            'produto' => $row['produto'],
            'quantidade' => $row['quantidade']
        );
    }
}

// Retorna as vendas como JSON
echo json_encode($vendas);

// Fecha a conexão
$conn->close();
?>
