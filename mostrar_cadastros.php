<?php

$conexao = new mysqli("localhost", "root", "", "cadastro");

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);

if ($result->num_rows > 0){
    echo "<h2 style='text-align: center;'> Usuários Cadastrados:</h2>";
    echo "<ul>";

    while ($usuarios = $result->fetch_assoc()) {
        echo "<li style='text-align: center;'><strong>Nome:</strong> " . $usuarios["nome"] . " | <strong>Email:</strong> " . $usuarios["email"] . "</li>";
    }

    echo "</ul>";
}else {
    echo "Nenhuma usuário cadastrado ainda.";
}

$conexao->close();


?>
