<?php
include 'aluno.php';

session_start();

 $AlunoDiferente = serialize($Aluno);
 $_SESSION['Aluno'] = $AlunoDiferente;

?>