<?php 
	require_once("connection.php");

	
	$nome  = $_POST['nome'] . ' ' . $_POST['sobrenome']; 
	$email = $_POST['email']; 
	$ipaddress = $_POST['ipaddress'];
	
	$query = "INSERT INTO leads (nome, email, ipaddress, created_at, updated_at)"; 
	$query .= " values ('" . $nome . "','" . $email . "','" . $ipaddress . "','" . date('Y-m-d H:i:s') . "','" . date('Y-m-d H:i:s') . "')";

	$verify_connection = mysql_query($query, $link);
	// var_dump($verify_connection);

	if(!$verify_connection) {
		die('Invalid query: ' . mysql_error());
	}

	mysql_close();
	// echo "Inserido com sucesso";

	// header("Location: http://localhost:8000/connection_test");


?>