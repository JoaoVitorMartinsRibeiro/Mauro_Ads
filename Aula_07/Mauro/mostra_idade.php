<?php
session_start();
require_once 'aluno.php';

if (!isset($_SESSION['Aluno'])) {
    echo 'Nenhum aluno registrado.';
    exit();
}

$aluno = unserialize($_SESSION['Aluno']);
?>
