<?php
	
include('../db/bancodedados.php');
	
	$pesquisar = $_POST['pesquisar'];
	
	$resultBusca = odbc_exec($db, "SELECT * FROM produto WHERE nomeProduto LIKE '%$pesquisar%'");
	
	while (	$resultado = odbc_fetch_array($resultBusca)){

		echo "Nome do Produto " . $resultado['nomeProduto'] . "<br>";
	
	}
?>