<?php
$servidor = "localhost"; // Substitua pelo nome do servidor PostgreSQL
$porta = "5433"; // Porta padrão do PostgreSQL
$banco = "BancoVendas"; // Substitua pelo nome do banco de dados PostgreSQL
$usuario = "postgres"; // Substitua pelo nome do usuário do PostgreSQL
$senha = "POSTGRE"; // Substitua pela senha do PostgreSQL

// Conectar ao servidor PostgreSQL
$conexao = pg_connect("host=$servidor port=$porta dbname=$banco user=$usuario password=$senha");

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    // Se não conseguiu conectar, exibe uma mensagem de erro e encerra o script
    die("Não foi possível conectar ao servidor PostgreSQL: " . pg_last_error());
} else {
    // Caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
    echo "Conexão efetuada com sucesso!!";
}

// Fechar a conexão (opcional, dependendo do fluxo do seu programa)
pg_close($conexao);
?>
