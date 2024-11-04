<?php

    $comandoSQL ="";

    $preparado = $conexao->prepare($comandoSQL);
    $preparado->execute();

    $resultado = $preparado->fetch(PDO::FETCH_ASSOC);

    echo "<tr><td>{$resultado['nome']}</td>";
    echo "<tr><td>{$resultado['jogadores']}</td>";
?>
 