 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
      <br> 
    <form action="" method="get">
    <label for="">Nome: </label> <br> <br>
    <input type="text" name="nome" id=""> <br> <br>
    <label for="">Serie: </label> <br> <br>
    <input type="text" name="serie" id=""> <br> <br>
    <label for="">Sexo: </label> <br> <br>
    <input type="text" name="sexo" id=""> <br> <br>
    <label for="">Data de Nascimento: </label> <br> <br>
    <input type="date" name="nascimento" id=""> <br> <br>

    <button>
         <a href="recebe.php">enviar</a>
    </button>

    </form>
 <?php
    include 'aluno.php';

?>
 </body>
 </html>