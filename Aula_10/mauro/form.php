 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Turmas IFSP- campus Barretos
    </h1>
    <form action="salva.php">
        <label for="">Nome Turma: </label> <br> <br>
       <select name="turma" id="" >
        <option value="1">Turismo </option>
        <option value="2">Analise Desenvolvimento De Sistemas </option>
        <option value="3">Quimica</option>
        <option value="4">Agronomia</option>
        <option value="5">Engenharia elétrica</option>
        <option value="6"></option>
       </select> <br> <br>

       <!-- <label for="">Nome alunos: </label> <br> <br>
       <select name="" id="">
        <option value="">jv</option>
        <option value="">angel</option>
        <option value="">fabricio</option>
        <option value="">rafaela</option>
        <option value="">duda</option> 
       </select> <br> <br>
        <label for="">Notas: </label> <br> <br>
        <input type="text" name="notas" id=""> <br> <br>
-->  
        <input type="submit" value="Salvar" >
        <br> <br>
        <p>
        Digite <a href="mostraAluno.php">Nome do Aluno:  </a>
        </p>
        <p>Digite<a href="mostraID.php"> seu ID:</a></p>
        <P>Digite a <a href="mostrarNotas.php">nota do Aluno</a></P>
        
        
    </form>
</body>
</html>