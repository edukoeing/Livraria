<html>
	<head>
		
		<h1>Livraria C-lig</h1>

		<p>
			<form method="post" action="pesquisar.php">
			    <input type="text" name="consulta" placeholder="Insira o nome a pesquisar" />
			    <input type="submit"  value="consulta" />
			</form>
		</p>


<?php
include_once "conexao.php";

try{

//execução da instrução sql
	$consulta = $conectar->query("SELECT * FROM pdo.livro");

	
	echo "<a href='formCadastro.php'>Novo Cadastro</a><br><br>Listagem de Livros";

	echo"<table border='1'><tr><td>Título</td><td>Autor</td><td>Categoria</td><td>Ações</td></tr>";

	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){


		echo"<tr>
				<td>$linha[titulo]</td>
				<td>$linha[autor]</td>
				<td>$linha[categoria]</td>
				<td>
					<a href='formEditar.php?id=$linha[id]'>Editar</a>
		 - 			<a href='excluir.php?id=$linha[id]'>Excluir</a>
		 		</td>
		 	</tr>";
	}

	echo "</table>";

	echo $consulta->rowCount() . " Registros Exibidos";


} catch(PDOException $e) {

	echo $e->getMessage();

}

?>


	</head>

</html>
