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
    $nome_paciente = $_POST['nome_paciente'];
    $nome_medicamento = $_POST['nome_medicamento'];
    $data_administracao = $_POST['data_administracao'];
    $hora_administracao = $_POST['hora_administracao'];
    $dose = $_POST['dose'];

    $sql = "INSERT INTO receitas (nome_paciente, nome_medicamento, data_administracao, hora_administracao, dose) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome_paciente, $nome_medicamento, $data_administracao, $hora_administracao, $dose);

    if ($stmt->execute()) {
        echo "Receita cadastrada com sucesso!";
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
    <title>Cadastro de Receitas</title>
</head>
<body>
    <h2>Cadastro de Receitas</h2>
    <form action="" method="POST">
        <label>Nome do Paciente:</label><br>
        <input type="text" name="nome_paciente" required><br>
        
        <label>Nome do Medicamento:</label><br>
        <input type="text" name="nome_medicamento" required><br>
        
        <label>Data da Administração:</label><br>
        <input type="date" name="data_administracao" required><br>
        
        <label>Hora da Administração:</label><br>
        <input type="time" name="hora_administracao" required><br>
        
        <label>Dose:</label><br>
        <input type="text" name="dose" required><br>
        
        <input type="submit" value="Cadastrar Receita">
    </form>
</body>
</html>