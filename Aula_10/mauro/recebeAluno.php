<!DOCTYPE html>
<html lang="pt-br">
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
 
             echo = "<a href='mostra.php?id=$id'>$nome</a <br>"
     }

    ?>
</body>
</html>