<?php
include_once "conexao.php";

try {
	$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$titulo = filter_var($_POST['titulo']);
	$autor = filter_var($_POST['autor']);
	$categoria = filter_var($_POST['categoria']);

	$update = $conectar->prepare("UPDATE pdo.livro SET titulo = :titulo, autor = :autor, categoria = :categoria WHERE id = :id");
	$update->bindParam(':id', $id);
	$update->bindParam(':titulo', $titulo);
	$update->bindParam(':autor', $autor);
	$update->bindParam(':categoria', $categoria);
	$update->execute();

	header("location: index.php");


} catch(PDOException $e){

echo 'Erro: ' . $e->getMessage();

}

?>