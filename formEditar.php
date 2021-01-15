<?php

include_once "conexao.php";

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$consulta = $conectar->query("SELECT * FROM pdo.livro where id = '$id'");
	$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar.php" method="post">
	Titulo: <input type="text" name="titulo" value="<?php echo $linha['titulo'] ?>" id="titulo"/><br>
	Autor: <input type="text" name="autor" value="<?php echo $linha['autor'] ?>" id="autor"/><br>
	Categoria: <input type="text" name="categoria" value="<?php echo $linha['categoria'] ?>" id="categoria"/><br>
	<input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
	<input type="submit" value="Editar">
</form>