<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$conn = new mysqli("localhost", "root", "", "cadastro");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!<br>";
    echo "<a href='mostrar_cadastros.php'>Ver usuários cadastrados<?a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>