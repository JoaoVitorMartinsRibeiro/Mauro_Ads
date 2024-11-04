<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id =$_GET['id'];

    $comandoSQL =  "SELECT * FROM `notas` WHERE ``id_aluno";

        include 'conexao.php';
        
        foreach($conexao->query($comandoSQL)as $linhas){
            $sth = $conexao->prepare($comandoSQL);
            $sth->execute();

            $resultado=$sth->fetch(PDO::FETCH_ASSOC);
            echo = "{$resultado['nome']} ";
            echo "{$linhas[valor1]}<br>";
            
        }


    ?>
</body>
</html>