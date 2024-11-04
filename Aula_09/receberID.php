<?php
//teste
$servidor = 'localhost';
$banco = 'futebol';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$soccer", $usuario, $senha);

$id = $_GET['id'];
$comandoSQL = "SELECT `nome`, `jogadores` FROM `soccer` WHERE `id` = $id";

$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();

if($resultado) {
    if($linha = $comando->fetch()) {
?>
<form action="atualiza.php">
	<label for="nome">Nome:</label>
<?php echo "<input type='text' name='nome' value='{$linha['nome']}'><br>"; ?>
	<label for="nome">jogadores:</label>
<?php 
    echo "<input type='text' name='jogadores' value='{$linha['jogadores']}'><br>"; 
    echo "<input type='hidden' name='id' value=$id>";
?>
	<input type="submit">
    </form>
<?php
    }
} 


?>
  <form action="dados.php">
	<label for="">ID que será atualizado:</label>
	<input type="text" name='id'><br>
	<input type="submit">
    </form>