<?php

try {

	//Faz a conexão com o banco de dados
	$conectar = new PDO("mysql:host=localhost;port:3306;dbname=pdo;","root","");
	

}  catch (PDOException $e) {

	//Caso ocorra algum errona onexão com o banco, exibe a mensagem.
	echo'Falha na conexão com o banco de dados: ' . $e->getMessage();

}

?>