<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servidor = 'localhost';
    $banco = 'time';
    $usuario = 'root';
    $senha = '';

    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $comandoSQL = "DELETE FROM NomesTimes WHERE `times`.`id` = :7";

    try {
	$comando = $conexao->prepare($comandoSQL);

	$resultado = $comando->execute(array('id' => $_GET['id']));

	if($resultado) {
	    echo "Item apagado!";
	} else {
	    echo "Erro ao apagar o item!";
	}
    } catch (Exception $e) {
	echo "Erro $e";
    }

?>
<h1>
    deletar time     
</h1>
 <form method="POST" action="">
        <label for="id">ID do Time:</label>
        <input type="number" id="id" name="id" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>