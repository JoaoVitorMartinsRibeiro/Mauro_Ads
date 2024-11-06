<?php
session_start();
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dbsaude"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO pacientes (nome, data_nascimento, genero, telefone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $data_nascimento, $genero, $telefone);

    if ($stmt->execute()) {
        echo "Paciente cadastrado com sucesso!";
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
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <h2>Cadastro de Pacientes</h2>
    <form action="" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br>
        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" required><br>
        <label>Gênero:</label><br>
        <select name="genero" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Binario</option>
        </select><br>
        <label>Telefone:</label><br>
        <input type="text" name="telefone" required><br> <br>
        <label for="">Leito</label> <br>
        <input type="text" name="" id=""> <br> <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
