<?php
 

include 'conexao.php';
$comandoSQL = "INSERT INTO `departamentos` (`id`, `rh`, `Administraçao`, `Contabilidade`, `Venda`) VALUES ('1', 'rh', 'adm', 'contabilidade', 'venda');"
 

 
$resultado = $conexao->query($comandoSQL);

if($resultado) {
    echo "Usuário {$_GET['nome']} cadastrado.";
} else {
    echo "Erro ao cadastrar usuário.";
}


?>