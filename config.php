<?php 
require 'environment.php';

global $config;
$config = array();
if (ENVIRONMENT == "development") { 						
	$config['dbname'] = 'rh360'; 	  
	$config['host'] = 'localhost'; //<!-- Nome do host -->
	$config['dbuser'] = 'root';	  //<!-- Nome do usurio -->
	$config['dbpass'] = ''; 		  //<!-- Senha -->
} else { 													
	$config['dbname'] = 'rh360';	  //<!-- Nome do banco -->
	$config['host'] = 'localhost'; //<!-- Nome do host -->
	$config['dbuser'] = 'root'; 	  //<!-- Nome do usurio -->
	$config['dbpass'] = '';		  //<!-- Senha -->
}