<?php
session_start();
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dbsaude"; 

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];
    $crm = $_POST['crm'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha

    $sql = "INSERT INTO medicos (nome, especialidade, crm, usuario, senha) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $especialidade, $crm, $usuario, $senha);

    if ($stmt->execute()) {
        echo "Médico cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Médicos</title>
</head>
<body>
    <h2>Cadastro de Médicos</h2>
    <form action="" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br>
        <label>Especialidade:</label><br>
        <input type="text" name="especialidade" required><br>
        <label>CRM:</label><br>
        <input type="text" name="crm" required><br>
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
