<?php

	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
	    die('Não foi possível conectar: ' . mysql_error());
	}
	mysql_set_charset('utf8', $link);
	// echo 'Conexão bem sucedida';

	mysql_select_db("rh360", $link);

?>