<?php
include_once "conexao.php";

try {

	$titulo = filter_var($_POST['titulo']);
	$autor = filter_var($_POST['autor']);
	$categoria = filter_var($_POST['categoria']);

	$insert = $conectar->prepare("INSERT INTO pdo.livro (titulo, autor, categoria) VALUES (:titulo, :autor, :categoria)");
	$insert->bindParam(':titulo', $titulo);
	$insert->bindParam(':autor', $autor);
	$insert->bindParam(':categoria', $categoria);
	$insert->execute();

	header("location: index.php");


} catch(PDOException $e){

echo 'Erro: ' . $e->getMessage();

}

?>