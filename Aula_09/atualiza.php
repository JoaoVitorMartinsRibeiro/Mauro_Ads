<?php
 
$host = 'localhost';
$db = 'futebol';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($resultado) {
    echo ("Conexão falhou: ");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = intval($_POST['id']);
    $nome = $_GET['nome'];
    $cidade = $_GET['jogadores'];
    
   
    $sql = "UPDATE time SET nome = '$nome', jogadores = '$cidade' WHERE id = $id";
    
    if ($comandoSQL === TRUE) {
        echo "Time atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar time: " ;
    }
} else {
    echo "Método inválido.";
}
