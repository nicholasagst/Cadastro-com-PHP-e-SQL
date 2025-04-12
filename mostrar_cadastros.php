<?php
//Cria conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "cadastro");
//Verifica se tem algum erro na conexão com o banco de dados
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<h2> Usuários Cadastrados:<h2>";
    echo "<ul>";

    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>Nome:</strong> " . $row["nome"] . " | <strong>Email:</strong> " . $row["email"] . "</li>";
    }

    echo "</ul>";
}else {
    echo "Nenhuma usuário cadastrado ainda.";
}

$conn->close();


?>
