<?php


include 'conexao.php';

$comandoSQL = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '{$_GET['nome']}', '{$_GET['email']}', '{$_GET['senha']}')";

// PDOStatement|false
$resultado = $conexao->query($comandoSQL);

$vetor = array();

if($resultado) {
    $vetor['resultado'] = "Usuário {$_GET['nome']} cadastrado.";
} else {
    $vetor['erro'] = "Erro ao cadastrar usuário.";
}

echo json_encode($vetor);

?>