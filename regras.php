<?php
$con = mysqli_connect('localhost', 'root', '', 'tcc_tads');

if (@$_REQUEST['descricao']) {
	$sql = "INSERT INTO regras (descricao, valor, multiplos, minOcorrencia, maxOcorrencia) VALUES ('$_REQUEST[descricao]', '$_REQUEST[valor]', '$_REQUEST[multiplos]', '$_REQUEST[minOcorrencia]', '$_REQUEST[maxOcorrencia]') ";
	$result = mysqli_query($con, $sql);
	if (!$result) {
		die(mysqli_error($con));
	}
}

if (@$_REQUEST['remover']) {
	$sql = "DELETE FROM regras WHERE id = $_REQUEST[remover]";
	$result = mysqli_query($con, $sql);
	if (!$result) {
		die(mysqli_error($con));
	}
}

if (@$_REQUEST['update']) {
	$sql = "UPDATE regras SET valor=$_REQUEST[valor] WHERE id = $_REQUEST[update]";
	$result = mysqli_query($con, $sql);
	if (!$result) {
		die(mysqli_error($con));
	}
}

$result = mysqli_query($con, "SELECT * FROM regras");

echo "<table border='1px solid black'>";

echo "<tr><th>Id</th><th>Descrição</th><th>Valor</th><th>Multiplos</th><th>Ocorrência Mínima</th><th>Ocorrência Máxima</th><th>Editar</th><th>Remover</th>";

while ($linha = mysqli_fetch_assoc($result)){
    echo "<input type='hidden' name='update' value='$linha[id]'>";
    echo "<tr><td>$linha[id]</td><td>$linha[descricao]</td><td>$linha[valor]</td><td>$linha[multiplos]</td><td>$linha[minOcorrencia]</td><td>$linha[maxOcorrencia]</td><td><a href='?remover=$linha[id]'>Editar</a></td><td><a href='?remover=$linha[id]'>Excluir</a></td></tr>";
}
?>

<h1>Cadastro de regras</h1>
<form method="post">
  <label for="descrição">Descrição:</label>&nbsp;
  <input type="text" name="descricao"><br>
  <label for="valor">Valor:</label>&nbsp;
  <input type="text" name="valor"><br>
  <label for="multiplos">Multiplos:</label>&nbsp;
  <input type="text" name="multiplos"><br>
  <label for="minOcorrencia">Ocorrência Mínima:</label>&nbsp;
  <input type="text" name="minOcorrencia"><br>
  <label for="maxOcorrencia">Ocorrência Máxima:</label>&nbsp;
  <input type="text" name="maxOcorrencia"><br>
  
  <input type="submit" value="Cadastrar"><br><br>

  <button><a href="inicial.php">Voltar</a></button>
</form> 

<h1>Lista de regras</h1>