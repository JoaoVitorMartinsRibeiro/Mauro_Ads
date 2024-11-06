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

$paciente_existe = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_paciente = $_POST['nome_paciente'];

  
    $sql = "SELECT * FROM pacientes WHERE nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome_paciente);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $paciente_existe = true;
    } else {
        
        $sql_cadastro = "INSERT INTO pacientes (nome) VALUES (?)";
        $stmt_cadastro = $conn->prepare($sql_cadastro);
        $stmt_cadastro->bind_param("s", $nome_paciente);
        $stmt_cadastro->execute();
        $stmt_cadastro->close();
        $paciente_existe = true; 
        echo "Paciente cadastrado com sucesso!<br>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificar Paciente</title>
</head>
<body>
    <h2>Verificar Paciente</h2>
    <form action="" method="POST">
        <label>Nome do Paciente:</label><br>
        <input type="text" name="nome_paciente" required><br>
        <input type="submit" value="Verificar">
    </form>

    <?php if ($paciente_existe): ?>
        <h3>Cadastro de Receita Médica</h3>
        <form action="cadastrar_receita.php" method="POST">
            <input type="hidden" name="nome_paciente" value="<?php echo htmlspecialchars($nome_paciente); ?>">
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
    <?php endif; ?>
</body>
</html>
