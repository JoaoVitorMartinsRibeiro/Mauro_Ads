<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         
            include 'conexao.php';
        
    foreach($conexao->query($comandoSQL)as $linhas){
        $id = $linhas['id'];
        $nome = $linhas['nome'];

            echo = "<a href='mostraAluno.php?id=$id'>$nome</a <br>"
    }
    ?>
</body>
</html>