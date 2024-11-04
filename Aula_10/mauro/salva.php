<?php

include 'conexao.php';

$comandoSQL = 'INSERT INTO `turmas` (`id`, `nome`) VALUES ('20', 'ads')';
$comandoSQL = 'SELECT * FROM `alunos` WHERE 1 nome and "id_turma';
$nome = $_GET['nome'];
$turma = $_GET['turma']

$resultado = $conexao->query($comandoSQL);

    if($resultado){
        echo "turma Criada";
    }
    else{
        echo "erro ao criar turma";
    }
?>