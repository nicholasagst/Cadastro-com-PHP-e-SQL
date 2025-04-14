<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$conexao = new mysqli("localhost", "root", "", "cadastro");

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if($conexao->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!<br>";
    echo "<a href='mostrar_cadastros.php'>Ver usuários cadastrados<?a>";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>