<?php
session_start();
$Aluno = unserialize($_SESSION['Aluno']);

echo $Aluno->nome;

?>