<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "postgres", "POSTGRE", "BancoVendas");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Query para selecionar todos os produtos
$sql = "SELECT id, nome FROM produtos";
$result = $conn->query($sql);

// Array para armazenar os produtos
$produtos = array();

if ($result->num_rows > 0) {
    // Adiciona cada produto ao array
    while($row = $result->fetch_assoc()) {
        $produtos[] = array(
            'id' => $row['id'],
            'nome' => $row['nome']
        );
    }
}

// Retorna os produtos como JSON
echo json_encode($produtos);

// Fecha a conexão
$conn->close();
?>
