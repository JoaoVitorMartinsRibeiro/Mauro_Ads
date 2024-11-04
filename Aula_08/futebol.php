<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    $servidor ='localhost';
    $banco ='dbfutebol';
    $usuario = 'root';
    $senha ='';

    $conexao = new PDO("mysql:host=$servidor;dbname$banco", $usuario,$senha);

    $comandoSQL = 'SELECT `NomesTimes`,`PontosTimes` FROM `times` ';

    $comando = $conexao->prepare($comandoSQL);
    $resultado = $comando->execute();


        if($resultado){
            echo "resultado; "
                    while($linha = $comando->fetch()){
                        echo $linha['NomesTimes']. "<br>";

                    }
        }
        else{
            echo "erro de resultado"
        }


    ?>
</body>
</html>