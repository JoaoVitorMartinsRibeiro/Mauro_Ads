<?php
session_start();
$servername = "localhost";
$username = "root";  
$dbname = " dbsaude";  

 
$conexaoSQL = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Conexão falhou: " . $conexaoSQL->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM medicos WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $medico = $result->fetch_assoc();
        if (password_verify($senha, $medico['senha'])) {
            $_SESSION['medico'] = $medico['usuario'];  
            header("Location: painel.php");  
            exit();
        } else {
            echo "Usuário ou senha inválidos!";
        }
    } else {
        echo "Usuário ou senha inválidos!";
    }

    $stmt->close();
}
$conn->close();
?>

?>